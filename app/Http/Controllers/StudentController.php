<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $var= Student::find(5)->getDers()->get();

        return response()->json($var);
    }
}
