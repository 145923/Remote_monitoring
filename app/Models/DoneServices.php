<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneServices extends Model
{
    use HasFactory;

    protected $table = "done_services";
    protected $primaryKey = "dsv_id";
    protected $fillable = ['se_id','sv_id','payment_code','dsv_date'];


    
    public function salonEmployees(){
        return $this->hasMany(salonEmployees::class);

}
public function Services(){
   return $this->hasMany(services::class);
}
}
