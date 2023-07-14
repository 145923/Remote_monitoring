<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
 //showing all roles
 public function all(){
//calling the role model
$allRoles = Role::all()->toArray();

//pass data to view file

 }
 //showing one role
 public function one(){}
 //showing the form to add a role
 public function add(){}
 public function save(){}
 public function edit(){}
}
