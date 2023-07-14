<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salonEmployees;
class SalonemployeeController extends Controller
{
    //showing all employees
 public function all(){
    //calling the salonemployees model
    $allSalonEmployess= salonEmployees::all()->toArray();
    
    //pass data to view file
    
     }
     //showing one employee
     public function one(){}
     //showing the form to add an employee
     public function add(){}
     public function save(){}
     public function edit(){}
}
