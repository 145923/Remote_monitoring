<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "remote_roles";
    protected $primaryKey = "role_id";
    protected $fillable = ['name'];

    public function salonEmployees(){
        return $this->hasMany(salonEmployees::class);

}
public function salonOwner(){
   return $this->hasMany(SalonOwner::class);
}
}