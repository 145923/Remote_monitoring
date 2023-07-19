<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalonOwner;
class SalonownerController extends Controller
{
    
 public function all(){
    //calling the salonOwner model
    $allSalonOwner = SalonOwner::all()->toArray();
    echo "<h1>Within the all method</h1>";
    
    //pass data to view file
    
     }
     //showing owner
     public function one(){}
     //showing the form to add the owner
     public function add(){}
     public function save(){}
     public function edit(){}
}
