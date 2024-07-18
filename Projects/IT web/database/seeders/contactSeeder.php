<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contact;

Use Faker\Factory as faker;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // seeding
        $data=new contact();
        $data->name="Akash";
        $data->email="Akash@gmail.com";
        $data->comment="hello";
        $data->save();
        */

        $faker= Faker::create();
        
        for($i=1;$i<=100;$i++)
        {
            $data=new contact();
            $data->name=$faker->name;
            $data->email=$faker->email;
            $data->comment="fake comment";
            $data->save();
        }

    }
}
