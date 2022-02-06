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
      'title' => $this->faker->sentence(mt_rand(6,8)),
      'slug' => $this->faker->slug(4),
      'category' => mt_rand(1,5),
      'cover' => 'cover ('.strval(mt_rand(1,5)).').png',
      'excerpt' => $this->faker->sentence(25),
      'body' => $this->faker->paragraph(mt_rand(5,8))
    ];
  }
}
