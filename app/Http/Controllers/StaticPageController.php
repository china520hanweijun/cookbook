<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    //
    public function index(){
        return '首页';
    }

    public function about(){
        return 'guanyuwomen';
    }

    public function help(){
        return 'bangzhu';
    }

}
