<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $store = new Student();
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->contact = $request->input('contact');
        $store->save();

        return ['success'=>true,'message'=>'data insert successfully'];
    }
}
