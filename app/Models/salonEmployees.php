<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salonEmployees extends Model
{
    use HasFactory;
    protected $table= "salon_employees";
    protected $primaryKey= "se_id";
    protected $fillable= ['se_name','se_password','se_phone', 'se_natid','role_id'];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}

