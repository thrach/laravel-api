<?php

use Illuminate\Database\Seeder;
use Api\Models\Lesson;
use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder {

    public function run()
    {
        Lesson::truncate();
        $fake = Faker::create();

        foreach(range(1,20) as $index){

            Lesson::create([
                'name' => $fake->sentence(4),
                'description' => $fake->paragraph(5)
            ]);
        }
    }
}