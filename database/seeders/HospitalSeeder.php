<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;
class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hospitals = [
            [
                'name' => 'Al Shifa Hospital',
                'image' =>  'uploads/specialty/165355068782326.png',
                'country_id' => 191,
                'city' =>'Tabuk',
                'address'=>'Tabuk City'
            ],
            [
                'name' => 'Pims Hospital',
                'image' =>  'uploads/specialty/165355068782326.png',
                'country_id' => 191,
                'city' =>'Riyadh',
                'address'=>'Riyadh City'
            ]
        ];

        foreach ($hospitals as $key => $hos){
                 Hospital::create($hos);
        }
    }
}
