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
    //hospital relation
    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
    //rating relation with doctor
    public function drating()
    {
        return $this->hasMany(DoctorReview::class)->orderBy('id','desc');
        
    }
    //doctor has education
    public function education()
    {
        return $this->hasMany(DoctorsHasEducation::class);
    }

    //doctor has experience
    public function experience()
    {
        return $this->hasMany(DoctorsHasExperience::class);
    }
    
}
