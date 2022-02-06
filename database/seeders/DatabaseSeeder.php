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

    // User::factory(5)->create();
    // Category::factory(10)->create();
    Article::factory(10)->create();

    $faker = Faker::create();

    User::create([
      'name' => 'Wikidev',
      'email' => 'hello@wikitora.dev',
      'username' => 'wikidev',
      'password' => bcrypt('passwordku123')
    ]);
    User::create([
      'name' => 'Okitora Winnetou',
      'email' => 'wiki.tora99@gmail.com',
      'username' => 'wikitora',
      'password' => bcrypt('passwordku123')
    ]);

    Category::create([
      'name' => 'Technology',
      'slug' => 'technology'
    ]);
    Category::create([
      'name' => 'Nature',
      'slug' => 'nature'
    ]);
    Category::create([
      'name' => 'Architecture',
      'slug' => 'architecture'
    ]);
    Category::create([
      'name' => 'Tips & Trick',
      'slug' => 'tips-trick'
    ]);
    Category::create([
      'name' => 'Design',
      'slug' => 'design'
    ]);    
  }
}
