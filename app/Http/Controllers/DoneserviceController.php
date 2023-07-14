<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoneServices;
class DoneserviceController extends Controller
{
    //showing all the done services
 public function all(){
    //calling the DoneService model
    $allDoneservices = DoneServices::all()->toArray();
    
    //pass data to view file
    
     }
     //showing one done service
     public function one(){}
     //showing the form to add a done service
     public function add(){}
     public function save(){}
     public function edit(){}
}
