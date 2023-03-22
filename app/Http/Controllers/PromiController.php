<?php

namespace App\Http\Controllers;

use App\Models\promi;
use App\Models\tblpromisorries;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PromiController extends Controller
{
   public function create(){
    return view('forms.create_promi')->with('title','ORMECO-Promisorry Potal | Add New Promissory');
   }

   public function store(Request $request){
    $validate_request = $request->validate(([
        "consumer_name" => ['required'],
        "consumer_address" => ['required'],
        "consumer_contact" => '',
        "account_no" => ['required'],
        "no_of_bills" => ['required'],
        "total_balance" => ['required'],
        "partial_payment" => '',
        "total_amount" => ['required'],
        "months_to_pay" => ['required'],
        "per_month" => ['required'],
        "start_date" => ['required'],
        "exp_date" => ['required'],
        "recon_fee" => '',
        "tr_no_recon" => '',
        "surcharge" => '',
        "tr_no_surcharge" => '',
        "remarks" => '',
        "is_verified" => '0',
        "is_approve" => '0',
        "is_posted" => '0',
    ]));

    promi::create($validate_request);

    return redirect('/')->with('message','New Promissory was added successfully');
   }
}
