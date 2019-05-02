<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test(){

        return view('test');
    }

    public function main(){

        return view('welcome');
    }
    
    public function welcome2(){

        return view('welcome2');
    }

    public function Page3(){

        return view('welcome3');
    }
}
