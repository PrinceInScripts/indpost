<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'employee_id' => 'required|string|unique:employees',
            'post' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|unique:employees|max:15',
            'salary' => 'required|numeric',
            'joining_date' => 'required|date',
            'posting' => 'required|string|max:255',
            's_o' => 'required|string|max:255',
            'job_status' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15360',
            'signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:15360',
            'eligible' => 'boolean',
        ]);

        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // return $validatedData;

        if ($request->hasFile('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('photos', 'public');
        }
        if ($request->hasFile('signature')) {
            $validatedData['signature'] = $request->file('signature')->store('signatures', 'public');
        }

        Employee::create($validatedData);

        return redirect()->back()->with('success', 'Employee registered successfully!');
    }
}
