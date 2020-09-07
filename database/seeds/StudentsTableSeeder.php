<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $new_student = new Student();
          $new_student->name = $faker->firstName;
          $new_student->lastname = $faker->lastName;
          $new_student->age = $faker->numberBetween(18, 50);
          $new_student->vote = $faker->numberBetween(0, 10);
          $new_student->note = $faker->paragraph;
          $new_student->save();
        }
    }
}
