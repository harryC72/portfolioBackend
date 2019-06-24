
<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\BlogPost::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            App\BlogPost::create([
                'blogTitle' => $faker->sentence,
                'blogContent' => $faker->paragraph,
            ]);
        }
        

    }
}
