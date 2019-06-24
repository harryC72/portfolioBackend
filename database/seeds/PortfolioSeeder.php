<?php

use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PortfolioItem::truncate();

$faker = \Faker\Factory::create();

for ($i = 0; $i < 20; $i++) {
           App\portFolioItem::create([
                'itemName' => $faker->word,
                'itemContent' => $faker->paragraph,
		        'technicalSpec' => $faker ->sentence
            ]);
        }
    }
}
