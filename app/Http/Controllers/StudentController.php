<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /*
    * @developer : Abhijit Kumar Das
    * @Creation Date: 26th March 2021
    * @description : Function for load the student listing page.
    */
    public function index(){
        $Student_data = Student::all()->sortByDesc('id');
        return view('student', ["Student_data"=>$Student_data]);
    }
    /*
    * @developer : Abhijit Kumar Das
    * @Creation Date: 26th March 2021
    * @description : Function for load the student edit page.
    */
    public function edit(){
        $Student_data = Student::get();
        dd($Student_data);
        return view('student', ["Student_data"=>$Student_data]);
    }

}
