@extends('layouts.studentlayout')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body bg-gradient-light">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="welcome-text text-primary font-weight-bold m-0">
                            Grades
                            </h3>
                            <div class="badge bg-primary text-white px-3 py-2">
                                <i class="far fa-calendar-alt me-1"></i> Academic Year 2024-2025
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body p-0">
                        <div style="height: calc(100vh - 280px); width: 100%; overflow-y: auto;" class="rounded">
                            <table class="table table-hover mb-0">
                                <colgroup>
                                    <col width="15%">
                                    <col width="25%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="15%">
                                </colgroup>
                                <thead style="position: sticky; top: 0; z-index: 1;" class="text-white">
                                    <tr>
                                        <th scope="col" class="py-3 px-4" style="background: linear-gradient(to bottom, #85C1E9, #3498DB);">Subject Code</th>
                                        <th scope="col" class="py-3 px-4" style="background: linear-gradient(to bottom, #85C1E9, #3498DB);">Subject Description</th>
                                        <th scope="col" class="py-3 px-4" style="background: linear-gradient(to bottom, #85C1E9, #3498DB);">Units</th>
                                        <th scope="col" class="py-3 px-4" style="background: linear-gradient(to bottom, #85C1E9, #3498DB);">Grade</th>
                                        <th scope="col" class="py-3 px-4" style="background: linear-gradient(to bottom, #85C1E9, #3498DB);">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollments as $enrollment)
                                    <tr class="border-bottom hover-bg-light">
                                        <td class="py-3 px-4 fw-bold text-primary">{{ $enrollment->subject->code }}</td>
                                        <td class="py-3 px-4">{{ $enrollment->subject->name }}</td>
                                        <td class="py-3 px-4">{{ $enrollment->subject->units }}</td>
                                        <td class="py-3 px-4 h5 mb-0 fw-bold">{{ $enrollment->grade->grade ?? '-' }}</td>
                                        <td class="py-3 px-4">
                                            @if(optional($enrollment->grade)->status == 'Passed')
                                                <span class="badge bg-success text-white px-3 py-2 rounded-pill">Passed</span>
                                            @elseif(optional($enrollment->grade)->status == 'Failed')
                                                <span class="badge bg-danger text-white px-3 py-2 rounded-pill">Failed</span>
                                            @else
                                                <span class="badge bg-secondary text-white px-3 py-2 rounded-pill">INC</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @if ($enrollments->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center py-5">
                                            <div class="text-muted">
                                                <i class="fas fa-inbox fa-3x mb-3 text-primary"></i>
                                                <p class="lead">No grades available at this time.</p>
                                                <small>Check back later or contact your instructor for more information.</small>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection