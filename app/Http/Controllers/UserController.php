<?php

namespace App\Http\Controllers;

use App\Models\AddPromi;
use App\Models\tbl_promi;
use App\Models\tblpromisorries;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        
        // $approve_promi = tblpromisorries::all();

        //  // $count_approve = tbl_promi::where('is_approve', true)->();
        // $count_approve = DB::table('tblpromisorries')
        //                 ->where('is_approve', '1')
        //                 ->count();

        // $count_pedning = DB::table('tblpromisorries')
        //                 ->where('is_approve', '0')
        //                 ->count();

        // return view('index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
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

   public function process(Request $request){
    $validate_request = $request->validate([
        "email" => ['required','email'],
        "password" => 'required'
    ]);

    if(auth()->attempt($validate_request)){
        $request->session()->regenerate();

        return redirect('/');
    }

   }

   public function register(){
    return view('user.register');
   }
   
   public function add_promi(){
    return view('forms.create_promi');
   }

   public function store_user(Request $request){
    $validate_request = $request->validate(([
        "name" => ['required','min:2'],
        "email" => ['required','email', Rule::unique('users','email')],
        "password" => 'required|confirmed|min:2'
    ]));

    $validate_request['password']= Hash::make($validate_request['password']);

    $user = User::create($validate_request);

    auth()->login($user);

    return redirect('login');  
   }

   public function logout(Request $request){
    auth()->logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('login')->with('message','Successfully Logout');

   }
}
