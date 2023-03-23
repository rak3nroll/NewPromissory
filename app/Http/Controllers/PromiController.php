<?php

namespace App\Http\Controllers;


use App\Models\tblpromisorries;
use Illuminate\Http\Request;


class PromiController extends Controller
{
   public function create_promi(){
    return view('forms.create')->with('title','ORMECO-Promisorry Potal | Add New Promissory');
   }

   public function show_promi($id){
    $data = tblpromisorries::findOrFail($id);
    dd($data);
   }

   public function store_promi(Request $request){
    $validate_request = $request->validate(([
        "consumer_name" => 'required',
        "consumer_address" =>'required',
        "consumer_contact" => 'required',
        "account_no" =>'required',
        "no_of_bills" =>'required',
        "total_balance" =>'required',
        "partial_payment" => 'required',
        "total_amount" =>'required',
        "months_to_pay" =>'required',
        "per_month" =>'required',
        "start_date" =>'required',
        "exp_date" =>'required',
        "recon_fee" => '',
        "tr_no_recon" => '',
        "surcharge" => '',
        "tr_no_surcharge" => '',
        "remarks" => '',
        "is_verified" => '',
        "is_approve" => '',
        "is_posted" => ''
    ]));

    tblpromisorries::create($validate_request);
    
    return redirect('/');
//    dd($validate_request);
   }

}
