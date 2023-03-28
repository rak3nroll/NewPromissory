<?php

namespace App\Http\Controllers;


use App\Models\tblpromisorries;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


use function Ramsey\Uuid\v1;

class UserController extends Controller
{      
//    public function login(){
//     if (view()->exists('user.login'))
//     {
//         return view('user.login')->with('title','ORMECO-Promisorry Potal | Login');  
//     }else{
//         return abort(404);
//     }
//    }

//    public function process(Request $request, $uid){
//     $validate_request = $request->validate([
//         "email" => ['required','email'],
//         "password" => 'required'
//     ]);
//     if(auth()->attempt($validate_request)){
//         $request->session()->regenerate();      
//         return redirect('/',);
//     }
//     else{
//         return back()->withErrors([
//             'email' => 'The provided credentials do not match our records.',
//         ]);
//     }
//    }

   public function register(){
    return view('user.register')->with('title','ORMECO-Promisorry Potal | Add New User');
   }
   
   public function store_user(Request $request){
    $validate_request = $request->validate(([
        "name" => ['required','min:2'],
        "email" => ['required','email', Rule::unique('users','email')],
        "email_verified_at" => now(),
        "password" => 'required|confirmed|min:2'
    ]));

    $validate_request['password']= Hash::make($validate_request['password']);

    $user = User::create($validate_request);

    auth()->login($user);

    return redirect('login');  
   }

   public function __construct()
   {
    $this->middleware('guest')->except('logout');
   }

   public function signin(Request $request){
        $validate_request = $request->validate([
            "email" => ['required','email'],
            "password" => 'required'
        ]);
        if(auth()->attempt($validate_request)){
                
            if(Auth::user()->role=='admin'){
                $request->session()->regenerate(); 
                return redirect()->route('admin.index');
            }
            if(Auth::user()->role=='user'){
                $request->session()->regenerate(); 
                return redirect()->route('user.index');
            }
        }
        else{
            return redirect()
            ->route('login')
            ->with('error','Incorrect email or password');
        }
       }

//    public function signin(Request $request){

//     $input = $request->all();
//     $this->validate($request,[
//         "email" => ['required','email'],
//         "password" => 'required'
//     ]);

//     if(auth()->attempt(['email'=>$input['email'],'password'=>$input['password']])){
//         if(Auth::user()->role=='admin'){
//             return redirect()->route('admin.index');
//         }
//         if(Auth::user()->role=='user'){
//             return redirect()->route('user.index');
//         }
//     }
//     else{
//         return redirect()
//         ->route('login')
//         ->with('error','Incorrect email or password');
//     }
//    }

   public function userIndex(){
        
    $approve_promi = tblpromisorries::all();

     // $count_approve = tbl_promi::where('is_approve', true)->();
    $count_approve = DB::table('tblpromisorries')
                    ->where('is_approve', '1')
                    ->count();

    $count_pedning = DB::table('tblpromisorries')
                    ->where('is_approve', '0')
                    ->count();

    return view('index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
    
    }

   public function adminIndex(){
        
    $approve_promi = tblpromisorries::all();

     // $count_approve = tbl_promi::where('is_approve', true)->();
    $count_approve = DB::table('tblpromisorries')
                    ->where('is_approve', '1')
                    ->count();

    $count_pedning = DB::table('tblpromisorries')
                    ->where('is_approve', '0')
                    ->count();

    return view('admin.index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
    }

    // public function verifierIndex(){
        
    // $approve_promi = tblpromisorries::all();

    //  // $count_approve = tbl_promi::where('is_approve', true)->();
    // $count_approve = DB::table('tblpromisorries')
    //                 ->where('is_approve', '1')
    //                 ->count();

    // $count_pedning = DB::table('tblpromisorries')
    //                 ->where('is_approve', '0')
    //                 ->count();

    // return view('index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
    // return view('index');
    // }

    // public function approverIndex(){
        
    // $approve_promi = tblpromisorries::all();

    //  // $count_approve = tbl_promi::where('is_approve', true)->();
    // $count_approve = DB::table('tblpromisorries')
    //                 ->where('is_approve', '1')
    //                 ->count();

    // $count_pedning = DB::table('tblpromisorries')
    //                 ->where('is_approve', '0')
    //                 ->count();

    // return view('index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
    // return view('index');
    // }

    // public function billing_userIndex(){
        
    // $approve_promi = tblpromisorries::all();

    //  // $count_approve = tbl_promi::where('is_approve', true)->();
    // $count_approve = DB::table('tblpromisorries')
    //                 ->where('is_approve', '1')
    //                 ->count();

    // $count_pedning = DB::table('tblpromisorries')
    //                 ->where('is_approve', '0')
    //                 ->count();

    // return view('index',['tblpromisorries' => $approve_promi, 'count_approve' => $count_approve,'count_pedning' => $count_pedning]);
    // return view('index');
    // }

    public function logout(Request $request){
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('login')->with('message','Successfully Logout');
    
       }

}
