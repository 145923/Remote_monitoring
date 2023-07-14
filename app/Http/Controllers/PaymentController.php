<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;
class PaymentController extends Controller
{
    //showing all payments
 public function all(){
    //calling the payment model
    $allPayments = payments::all()->toArray();
    
    //pass data to view file
    
     }
     //showing one payment
     public function one(){}
     //showing the form to add a payment
     public function add(){}
     public function save(){}
     public function edit(){}
}
