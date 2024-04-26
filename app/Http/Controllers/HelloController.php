<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class HelloController extends Controller
{
    //
    public function index(){
        echo 'aaa';
        $tests = Test::all();
        print_r($tests[0]['id']);
    }
}
