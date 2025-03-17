@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Employee List</h2>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Employee ID</th>
                <th>Post</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Joining Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $employees = App\Models\Employee::all();
            @endphp
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>
                    <img src="{{ asset('storage/'.$employee->photo) }}" alt="Employee Photo" width="50" height="50" class="rounded-circle">
                </td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->employee_id }}</td>
                <td>{{ $employee->post }}</td>
                <td>{{ $employee->phone }}</td>
                <td>₹{{ number_format($employee->salary, 2) }}</td>
                <td>{{ date('d M Y', strtotime($employee->joining_date)) }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#employeeModal{{ $employee->id }}">
                        View
                    </button>
                </td>
            </tr>

            <!-- Bootstrap Modal for Employee Details -->
            <div class="modal fade" id="employeeModal{{ $employee->id }}" tabindex="-1" aria-labelledby="employeeModalLabel{{ $employee->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Employee Details - {{ $employee->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Father's Name:</strong> {{ $employee->father_name }}</p>
                            <p><strong>Mother's Name:</strong> {{ $employee->mother_name }}</p>
                            <p><strong>Employee ID:</strong> {{ $employee->employee_id }}</p>
                            <p><strong>Post:</strong> {{ $employee->post }}</p>
                            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
                            <p><strong>Salary:</strong> ₹{{ number_format($employee->salary, 2) }}</p>
                            <p><strong>Joining Date:</strong> {{ date('d M Y', strtotime($employee->joining_date)) }}</p>
                            <p><strong>Posting:</strong> {{ $employee->posting }}</p>
                            <p><strong>Job Status:</strong> {{ ucfirst($employee->job_status) }}</p>
                            <p><strong>Profile Photo:</strong></p>
                            <img src="{{ asset('storage/'.$employee->photo) }}" class="img-fluid rounded" alt="Employee Photo">
                            <p><strong>Signature:</strong></p>
                            <img src="{{ asset('storage/'.$employee->signature) }}" class="img-fluid" alt="Employee Signature">
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
