<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch the count of students and subjects
        $studentCount = Student::count();
        $subjectCount = Subject::count();

        // Fetch the 5 most recent students with their full information
        $recentStudents = Student::orderBy('created_at', 'desc')
                                ->take(5)
                                ->get();

        // Fetch all subjects
        $subjects = Subject::all();

        // Calculate percentage changes
        // Get the count from a week ago
        $lastWeekCount = Student::where('created_at', '<=', now()->subWeek())
                               ->count();
        $studentChange = $lastWeekCount > 0 
            ? round((($studentCount - $lastWeekCount) / $lastWeekCount) * 100, 1)
            : 100;

        // Get the count from a month ago for subjects
        $lastMonthCount = Subject::where('created_at', '<=', now()->subMonth())
                                ->count();
        $subjectChange = $lastMonthCount > 0
            ? round((($subjectCount - $lastMonthCount) / $lastMonthCount) * 100, 1)
            : 100;

        return view('dashboard', compact(
            'studentCount',
            'subjectCount',
            'recentStudents',
            'subjects',
            'studentChange',
            'subjectChange'
        ));
    }
}