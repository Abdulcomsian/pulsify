<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoctorDetail;
class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            [
                'full_name' => 'Muhammad Obaid',
                'image' =>  'uploads/doctors/doctor3.png',
                'email' => 'obaidkust@gmail.com',
                'phone'=>'03339639706',
                'title'=>'Best Eye Specialist Doctor',
                'description'=>'Very personable and good listener. Makes you feel comfortable and open immediately. Felt well taken care...',
                'country_id'=>191,
                'city' =>'Tabuk',
                'address'=>'Tabuk City',
                'specialtie_id'=>1,
                'experience'=>5,
                'hospital_id'=>1,
                'gender'=>'male',

            ]
        ];

        foreach ($doctors as $key => $docs){
                 DoctorDetail::create($docs);
        }
    }
}
