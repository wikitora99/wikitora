<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\ {
    User,
    Article,
    Category
};


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
    Article::factory(50)->create();


    User::create([
      'name' => 'Okitora Winnetou',
      'email' => 'hello@wikidev.com',
      'username' => 'wikitora',
      'password' => Hash::make('password')
    ]);
    User::create([
      'name' => 'Fulan bin Fulan',
      'email' => 'iamfulan@gmail.com',
      'username' => 'fulan999',
      'password' => Hash::make('password')
    ]);
    User::create([
      'name' => 'John Doe',
      'email' => 'doe69john@yahoo.co.id',
      'username' => 'doejhon',
      'password' => Hash::make('password')
    ]);

    
    $categories = [
      'Technology', 'Nature', 
      'Career', 'Economy', 
      'Design', 'Astronomy'];

    for ($i = 0; $i < count($categories); $i++){
      Category::create([
        'name' => $categories[$i],
        'slug' => Str::slug($categories[$i])
      ]); 
    }
    
  }
}
