<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function index(){

        $dene = Lesson::find(2);

        return response()->json($dene->getTeacher);

    }

    public function ikile(){
        $var = Lesson::find(3)->getStudents()->get();

        return response()->json($var);
    }
}
