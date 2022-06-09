<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    //coutnry relation
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    //speciality relation
    public function sepcial(){
        return $this->belongsTo(Specialty::class,'specialtie_id','id');
    }
    //rating relation with doctor
    public function drating()
    {
        return $this->hasMany(DoctorReview::class)->orderBy('id','desc');
        
    }
    
}
