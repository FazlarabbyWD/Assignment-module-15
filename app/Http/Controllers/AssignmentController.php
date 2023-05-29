<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AssignmentController extends Controller
{
    public function Task1(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'string|required|min:2',
            'email' => 'email|required',
            'password' => 'required|string|min:8',
        ]);


    }
    public function eight(){
        return view('welcome');
    }
}
