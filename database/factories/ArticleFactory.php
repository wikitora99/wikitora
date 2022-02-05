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
      'cover' => 'cover ('.strval(mt_rand(1,5)).').png',
      ''
    ];
  }
}
