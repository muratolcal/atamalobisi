<?php

namespace App\Http\Controllers\MuratAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DersController extends Controller
{
    public function dersPDR(){
        return view('MuratAdmin.lessonsList.pdröabt');
    }
    public function dersOKUL(){
        return view('MuratAdmin.lessonsList.okulöncesi');
    }
}
