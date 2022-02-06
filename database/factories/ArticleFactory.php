<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {

    return [
      'title' => $this->faker->sentence(mt_rand(6,10)),
      'slug' => $this->faker->slug(4),
      'user_id' => mt_rand(1,2),
      'category_id' => mt_rand(1,5),
      'cover' => 'cover-'.strval(mt_rand(1,15)).'.jpg',
      'excerpt' => $this->faker->sentence(40, false),
      'body' => $this->faker->paragraph(30, false)
    ];
  }
}
