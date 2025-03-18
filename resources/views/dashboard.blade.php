@extends('layouts.app')

@section('content')

@php
    $auth = Auth::user();
@endphp
<div class="container">
    <h1 class="text-center fw-bold fs-4 py-4 text-dark">India Post Office Employee Information</h1>
    
    <div class="card">
        <div class="card-body">
            <div class=" d-flex align-items-center">
                <img src="{{ asset('storage/'.$auth->photo) }}" alt="Profile Image" class="rounded-circle" width="100">
                <h1 class="fs-2 fw-bold font-monospace text-uppercase">{{ $auth->name }}</h1>
            </div>

            <table class="table mt-4">
                <tr>
                    <th>Name:</th>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <th>Father Name:</th>
                    <td>{{ Auth::user()->father_name }}</td>
                </tr>
                <tr>
                    <th>Mother Name:</th>
                    <td>{{ Auth::user()->mother_name }}</td>
                </tr>
                <tr>
                    <th>Employee ID:</th>
                    <td>{{ Auth::user()->employee_id }}</td>
                </tr>
             
                <tr>
                    <th>Phone:</th>
                    <td>{{ Auth::user()->phone }}</td>
                </tr>
                <tr>
                    <th>Aadhaar Number:</th>
                    <td>{{ Auth::user()->aadhaar_number }}</td>
                </tr>
                <tr>
                    <th>Account Number:</th>
                    <td>{{ Auth::user()->account_number }}</td>
                </tr>
                <tr>
                    <th>Position:</th>
                    <td>{{ Auth::user()->post }}</td>
                </tr>
                <tr>
                    <th>Posting:</th>
                    <td>{{ Auth::user()->posting }}</td>
                </tr>
                <tr>
                    <th>Salary:</th>
                    <td>₹{{ Auth::user()->salary }}</td>
                </tr>
                <tr>
                    <th>Joining Date:</th>
                    <td>{{ Auth::user()->joining_date }}</td>
                </tr>
                <tr>
                    <th>Job Status:</th>
                    <td>{{ Auth::user()->job_status }}</td>
                </tr>
                <tr>
                    <th>Eligible:</th>
                    <td>
                        <span class="badge {{ Auth::user()->eligible ? 'bg-success' : 'bg-danger' }}">
                            {{ Auth::user()->eligible ? 'Eligible' : 'Not Eligible' }}
                        </span>
                    </td>
                </tr>
                
                <tr>
                    <th>Signature:</th>
                    <td>
                        <img src="{{ asset('storage/' . $auth->signature) }}" alt="Signature" width="150">
                    </td>
                </tr>
            </table>

             <!-- Logout Button -->
             <div class="text-center mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
