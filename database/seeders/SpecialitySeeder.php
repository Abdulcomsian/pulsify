<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialty;
class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speciality = [
            [
                'name' => 'Primary Care',
                'image' =>  'uploads/specialty/165355068782326.png',
                'is_featured' => 1,
                'status' =>1,
            ],
            [
                'name' => 'Eye Specialist',
                'image' =>  'uploads/specialty/eyeSpecialist.png',
                'is_featured' => 1,
                'status' =>1,
            ],
            [
                'name' => 'Skin Specialist',
                'image' =>  'uploads/specialty/skinSpecialist.png',
                'is_featured' => 1,
                'status' =>1,
            ]
        ];

        foreach ($speciality as $key => $spec){
                 Specialty::create($spec);
        }
    }
}
