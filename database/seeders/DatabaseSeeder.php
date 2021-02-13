<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        for ($i = 0; $i < 200 ; $i++) {


        	Student::create(
           	[
       		'name' => "user $i",
       		'phone' => rand(1,1000000),
       		'email' => "user-$i@room.ci",
       		'city' => 'Abidjan',
       		'old' => rand(10,45),
         	]);
        	
        }
      


       
    }
}
