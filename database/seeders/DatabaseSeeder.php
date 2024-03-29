<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\ {
    User,
    UserRole,
    Article,
    Category,
    Tag
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
    Article::factory(48)->create();


    $categories = [
      'Technology', 'Nature', 'Science', 
      'Business', 'Design', 'Fashion', 
      'Photography', 'Lifestyle'];

    $tags = [
      'project', 'technology', 'photography', 'art',
      'design', 'programming', 'computer', 'cyber',
      'coding', 'startup', 'illustration', 'career',
      'tips', 'website', 'application', 'internet',
      'blockchain', 'bitcoin', 'product', 'crypto',
      'cloud computing', 'big data', 'data mining',
      'web 3.0', 'frontend', 'backend', 'people'
    ];


    User::create([
      // 'role' => 1,
      'name' => 'Okitora Winnetou',
      'email' => 'hello@wikidev.com',
      'username' => 'wikitora',
      'password' => Hash::make('password'),
      'avatar' => 'pic1.jpg'
    ]);
    User::create([
      // 'role' => 2,
      'name' => 'Fulan bin Fulan',
      'email' => 'iamfulan@gmail.com',
      'username' => 'fulan999',
      'password' => Hash::make('password'),
      'avatar' => 'pic2.jpg'
    ]);
    User::create([
      // 'role' => 3,
      'name' => 'John Doe',
      'email' => 'doe69john@yahoo.co.id',
      'username' => 'doejhon',
      'password' => Hash::make('password'),
      'avatar' => 'pic4.jpg'
    ]);

    UserRole::create(['role_name' => 'Super Admin']);
    UserRole::create(['role_name' => 'Moderator']);
    UserRole::create(['role_name' => 'Member']);

    for ($i = 0; $i < count($categories); $i++){
      Category::create([
        'name' => $categories[$i],
        'slug' => Str::slug($categories[$i])
      ]);
    }

    for ($i = 0; $i < count($tags); $i++){
      Tag::create([
        'name' => $tags[$i],
        'slug' => Str::slug($tags[$i])
      ]);
    }
    
  }
}
