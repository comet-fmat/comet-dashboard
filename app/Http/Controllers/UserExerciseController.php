<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserExerciseController extends Controller
{
    public function display(){
        //Data view reply
        $viewData =[
            'numRuns' => '',
            'error' => '',
            'numSubmissions' => '',
            'testCase'=> '',
            'points'=> '',
            'success'=>''

        ];

        return $viewData;
    }
}
