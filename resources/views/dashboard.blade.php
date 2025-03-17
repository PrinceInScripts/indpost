@extends('layouts.app')

@section('content')

@php
    $auth = Auth::user();
@endphp
<div class="container">
    <h1 class="text-center text-white py-4">Employee Dashboard</h2>
    
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <img src="{{ asset('storage/'.$auth->photo) }}" alt="Profile Image" class="rounded-circle" width="100">
            </div>

            <table class="table mt-4">
                <tr>
                    <th>Name:</th>
                    <td>{{ Auth::user()->name }}</td>
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
                    <th>Position:</th>
                    <td>{{ Auth::user()->post }}</td>
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
