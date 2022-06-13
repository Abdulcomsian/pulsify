<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    //doctor_detail relation
    public function doctor_detail()
    {
        return $this->hasMany(DoctorDetail::class);
    }
}
