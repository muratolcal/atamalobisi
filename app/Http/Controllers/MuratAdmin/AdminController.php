<?php

namespace App\Http\Controllers\MuratAdmin;

use App\Models\User;
use App\Models\Zoom;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Teacher;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){

        return view('MuratAdmin.adminSideFront.ogrenciEkle');
    }

    public function ogrenciEkle(Request $request){

            $request->validate([
                'tcno' => 'nullable | size:11 | unique:students,tcno',
                'isimsoyisim' => 'required',
                'email' => 'nullable | unique:students,email',
                'telno' => 'nullable | unique:students,phone',

                ]);

            function makePassword(){

                $faker = Faker::create();

                $pass = $faker->password();

                return $pass;
            }

             Cache::put('tcno', $request->tcno,1);
             Cache::put('password',makePassword(),1);
             Cache::put('email',$request->email,1);


            Student::create([
                'name' => $request->isimsoyisim,
                'phone' => $request->telno,
                'tcno' => $request->tcno,
                'email' =>  $request->email,
                'password' =>makePassword(),
            ]);

            User::create([
                'name' => $request->isimsoyisim,
                'phone' => $request->telno,
                'tcno' => $request->tcno,
                'email' =>  $request->email,
                'password' =>makePassword(),
            ]);

            return back();

        }

        public function ogretmenekleIndex(){

            return view('MuratAdmin.adminSideFront.ogretmenekle');
        }

        public function ogretmenekle(Request $request){

            $request->validate([
                'isimsoyisim' => 'required',
                'telno' => 'required | digits:11 | unique:teachers,phone',
                'email' => 'required | email | unique:teachers,email',
                ]);

                function oMakePassword(){

                    $faker = Faker::create();

                    $pass = $faker->password();

                    return $pass;
                }

                Cache::put('email', $request->email,1);
                Cache::put('password',OmakePassword(),1);

                Teacher::create([
                    'name' => $request->isimsoyisim,
                    'phone' => $request->telno,
                    'email' =>  $request->email,
                    'password' => OmakePassword(),
                ]);

               return back();
        }

        public function dersekleIndex(){
            return view('MuratAdmin.adminSideFront.dersEkle');
        }

        public function dersekle(Request $request){

            $request->validate([
                'dersname' => 'required | unique:lessons,dersName',
                ]);

        Cache::put('dersname', $request->dersname, 1);

        Lesson::create([
            'dersName' => $request->dersname,
        ]);



                return back();

        }

        public function listelemeIndex(){

            $öğrenci = Student::get();
            $ogretmen = Teacher::get();
            $ders = Lesson::get();


            return view('MuratAdmin.adminSideFront.listeleme')->with('ogrenci',$öğrenci)
            ->with('ogretmen',$ogretmen)
            ->with('ders',$ders);

        }

        public function listelemeC(Request $request){

        Cache::put('option', $request->option, 1);
        return back();

        }

        public function dersPlanla(){
            return view('MuratAdmin.adminSideFront.dersPlanla');
        }

        public function dersPlanlaStore(Request $request){



            $request->validate([
                'dersadi' => 'required',
                'ogretmenadi' => 'required',
                'zoomlink' => 'required',
                'date' => 'required|date',
                'saat' => 'required',
                ]);

                Cache::put('dersadi', $request->dersadi, 1);
                Cache::put('ogretmenadi', $request->ogretmenadi, 1);
                Cache::put('zoomLink', $request->zoomLink, 1);
                Cache::put('date', $request->date, 1);
                Cache::put('saat', $request->saat, 1);


            Zoom::create([
                'dersName' => $request->dersadi,
                'teacherName' => $request->ogretmenadi,
                'zoomLink' => $request->zoomlink,
                'date' => $request->date,
                'saat' => $request->saat,
            ]);

            return back();
        }

    }


