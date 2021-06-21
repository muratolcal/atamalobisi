<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function getLessons(){
        $teach = Teacher::find(1);
        return response()->json($teach->getLessons);
    }
}
