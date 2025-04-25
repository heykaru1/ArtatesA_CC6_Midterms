<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Student;

class StudentEmailController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
        ]);

        $student = Student::findOrFail($validated['student_id']);

        $response = Http::post('https://hook.us2.make.com/ypdv2np1njtvc4vc7wark6jukbtf3c6h', [
            'name' => $student->name,
            'email' => $student->email,
            'phone' => $student->phone,
            'address' => $student->address,
        ]);

        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Email triggered successfully via Make.com!',
                'student' => $student
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to trigger email via Make.com.',
            ], 500);
        }
    }
}
