<?php

namespace Database\Seeders;

use App\Models\MasterData\Specialist;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create data here 
        $specialist = [

            [
                'name' =>'Dermatology',
                'price' =>'200000',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ],

            [
                'name' =>'Neurology',
                'price' =>'150000',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ],

            [
                'name' =>'Dentist',
                'price' =>'250000',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ],

            [
                'name' =>'Allergists',
                'price' =>'300000',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ],

            [
                'name' =>'Cardiologists',
                'price' =>'400000',
                'created_at' =>date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s'),
            ],

        ];


        //this array $specialist will be insert to table 'specialist'
        Specialist::insert($specialist);
    }
}
