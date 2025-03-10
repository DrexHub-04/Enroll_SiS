<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard'); // Redirect users
        }

        if (Auth::guard('student')->check()) {
            return redirect()->route('student.dashboard'); // Redirect students
        }

        return view('auth.login'); // Show login page only if no one is logged in
    }


    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Check if the user is a student
        if (session('user_type') === 'student') {

            return redirect()->intended(route('student.dashboard', absolute: false));
        }
        // Default redirect for normal users
        return redirect()->intended(route('dashboard', absolute: false));
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
