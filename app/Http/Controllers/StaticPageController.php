<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function about(){
        return 'guanyuwomen';
    }

    public function help(){
        return 'bangzhu';
    }

}
