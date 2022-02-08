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
      'slug' => $this->faker->unique()->slug(4),
      'user_id' => mt_rand(1,3),
      'category_id' => mt_rand(1,6),
      'cover' => 'cover-'.strval(mt_rand(1,15)).'.jpg',
      'excerpt' => $this->faker->sentence(40, false),
      'body' => $this->faker->paragraph(30, false),
      'views' => $this->faker->numberBetween(100, 1000),
      'published_at' => $this->faker->dateTimeThisYear()
    ];
  }
}
