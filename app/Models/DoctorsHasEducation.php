<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsHasEducation extends Model
{
    use HasFactory;
    protected $table = 'doctors_has_educations';
    protected $guarded = [];
    
    //doctordetail relation
    public function doctor_detail()
    {
        return $this->belongsTo(DoctorDetail::class);
    }

}
