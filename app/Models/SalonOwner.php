<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalonOwner extends Model
{
    use HasFactory;
    protected $table= "salon_owner";
    protected $primaryKey= "so_id";
    protected $fillable= ['so_name','so_password','so_phone', 'role_id'];

    public function role(){
        return $this->belongsTo(Role::class);
}
}