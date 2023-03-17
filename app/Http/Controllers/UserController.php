<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
   public function login(){
    if (view()->exists('user.login'))
    {
        return view('user.login');  
    }else{
        return abort(404);
    }
   }
   public function register(){
    return view('user.register');
   }
}
