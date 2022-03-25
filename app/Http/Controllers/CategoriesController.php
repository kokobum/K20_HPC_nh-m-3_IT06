<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function _construct(){

    }

    //hiển thị giao diện
    public function index(){
        return view('main');

    }

    //login
    public function login(){
        return view('login');
    }
    //register
    public function register(){
        return view('register');
    }
    //hiển thị blogk20
    public function blogk20(){
        return view('blogk20');
    }
    public function getAuthLogin(){
        return view('login');
    }
    public function postAuthlogin(){
        return view('login');
    }

}
