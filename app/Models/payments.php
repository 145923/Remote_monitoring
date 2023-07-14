<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;
    protected $table = "payment";
    protected $primaryKey = "payment_code";
    protected $fillable = ['payment_amount','payment_date','dsv_id'];

    public function doneservices(){
        return $this->belongsTo(DoneServices::class);
    }
}
