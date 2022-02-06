<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ {
    User,
    Article,
    Category
};

use Faker\Factory as Faker;

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
    // Article::factory(5)->create();

    $faker = Faker::create();


    User::create([
      'name' => 'Okitora Winnetou',
      'email' => 'hello@wikitora.dev',
      'password' => bcrypt('passwordku1904')
    ]);
    User::create([
      'name' => 'Fulan bin Fulan',
      'email' => 'iam.fulan@gmail.com',
      'password' => bcrypt('passwordku1904')
    ]);


    Category::create([
      'name' => 'Technology',
      'slug' => 'technology'
    ]);
    Category::create([
      'name' => 'Career',
      'slug' => 'career'
    ]);
    Category::create([
      'name' => 'Politic',
      'slug' => 'politic'
    ]);
    Category::create([
      'name' => 'Economy',
      'slug' => 'economy'
    ]);
    Category::create([
      'name' => 'Lifestyle',
      'slug' => 'lifestyle'
    ]);


    for ($i = 1; $i <= 10; $i++){
      Article::create([
        'title' => $faker->sentence(mt_rand(6,8)),
        'slug' => $faker->slug(4),
        'user_id' => mt_rand(1,2),
        'category_id' => mt_rand(1,5),
        'cover' => 'cover ('.strval(mt_rand(1,5)).').png',
        'excerpt' => $faker->sentence(25),
        'body' => $faker->paragraph(mt_rand(5,8))
      ]);
    }    
  }
}
