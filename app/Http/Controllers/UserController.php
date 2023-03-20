<?php

namespace App\Http\Controllers;

use App\Models\AddPromi;
use App\Models\tbl_promi;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        
        $approve_promi = tbl_promi::all();

         // $count_approve = tbl_promi::where('is_approve', true)->();
        $count_approve = DB::table('tbl_promis')
                        ->where('is_approve', '1')
                        ->count();

        $count_pedning = DB::table('tbl_promis')
                        ->where('is_approve', '0')
                        ->count();

        return view('index',['tbl_promi' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
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
   
   public function add_promi(){
    return view('forms.create_promi');
   }
}
