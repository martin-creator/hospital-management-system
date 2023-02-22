<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // public function getData(Request $request){
    //     $data = 'My data';
    //     return view('index', ['data'=>$data]);
    // }

    public function getAllDepartments(Request $request){
        $departments = Department::all();
        return view('index', ['departments'=>$departments]);
    }

    public function showAppointments(Request $request){
        
    }
}


