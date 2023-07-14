<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;
class ServiceController extends Controller
{
    //showing all services
 public function all(){
    //calling the service model
    $allServies = services::all()->toArray();
    
    //pass data to view file
    
     }
     //showing one service
     public function one(){}
     //showing the form to add a service
     public function add(){}
     public function save(){}
     public function edit(){}
}
