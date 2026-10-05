<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function showForm()
    {
        return view('student-form');
    }

    public function submitForm(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        // Save student information to database
        Student::create([
            'name' => $name,
            'email' => $email,
            'age' => $age
        ]);

        return "Student information saved successfully!";
    }
}
