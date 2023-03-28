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
    return view('admin.edit',['tblpromisorry'=>$data])->with('title','ORMECO-Promisorry Potal | Update Records Promissory');
   }

   public function store_promi(Request $request){
    $validate_request = $request->validate([
        "consumer_name" => '',
        "consumer_address" =>'',
        "consumer_contact" => '',
        "account_no" =>'',
        "no_of_bills" =>'',
        "total_balance" =>'',
        "partial_payment" => '',
        "total_amount" =>'',
        "months_to_pay" =>'',
        "per_month" =>'',
        "start_date" =>'',
        "exp_date" =>'',
        "recon_fee" => '',
        "tr_no_recon" => '',
        "surcharge" => '',
        "tr_no_surcharge" => '',
        "remarks" => '',
        "is_verified" => '',
        "is_approve" => '',
        "is_posted" => ''
    ]);

    tblpromisorries::create($validate_request);
    
    return redirect('/');

   }

}
