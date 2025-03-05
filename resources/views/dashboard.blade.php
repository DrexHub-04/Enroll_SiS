@extends('layouts.mainlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="dashboard-content">

            <!-- Stats Cards -->
            <div class="row">
                <!-- Total Students Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="card-header p-2 ps-3 bg-success text-white">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Total Students</p>
                                    <h4 class="mb-0">{{ $studentCount }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-2 ps-3">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+{{ $studentChange }}% </span>than last week</p>
                        </div>
                    </div>
                </div>

                <!-- Total Subjects Card -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card shadow-sm">
                        <div class="card-header p-2 ps-3 bg-success text-white">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p class="text-sm mb-0 text-capitalize">Total Subjects</p>
                                    <h4 class="mb-0">{{ $subjectCount }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer p-2 ps-3">
                            <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+{{ $subjectChange }}% </span>than last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tables Section -->
            <div class="row table-section mt-4"> <!-- Added mt-4 for spacing -->
                <!-- Recently Added Students -->
                <div class="col-lg-8">
                    <div class="card shadow-sm border border-light h-100">
                        <div class="card-header pb-0 bg-info text-white">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="mb-0">Recently Added Students</h6>
                                    <p class="text-sm mb-0">
                                        Total Students: {{ $studentCount }} - This month
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($recentStudents as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->course }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Subjects List -->
                <div class="col-lg-4">
                    <div class="card shadow-sm border border-light h-100">
                        <div class="card-header pb-0 bg-info text-white">
                            <h6 class="mb-0">Subjects</h6>
                            <p class="text-sm mb-0">
                                {{ $subjects->count() }} total subjects
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush">
                                @foreach($subjects as $subject)
                                <div class="list-group-item border-bottom py-2">
                                    <span class="text-dark">{{ $subject->name }}</span>
                                    <br>
                                    <small class="text-muted">Code: {{ $subject->code }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection