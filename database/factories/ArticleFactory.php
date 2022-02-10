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

    $post = '';

    for ($i = 1; $i < mt_rand(6,8); $i++){
      $post .= '<p>'.$this->faker->sentence(mt_rand(70,100)).'</p>';
    }

    return [
      'title' => $this->faker->unique()->sentence(mt_rand(6,8)),
      'slug' => $this->faker->unique()->slug(4),
      'user_id' => mt_rand(1,3),
      'category_id' => mt_rand(1,8),
      'cover' => 'cover-'.strval(mt_rand(1,20)).'.jpg',
      'excerpt' => $this->faker->sentence(30, false),
      'body' => $post,
      'views' => $this->faker->numberBetween(100, 5000),
      'published_at' => $this->faker->dateTimeThisYear()
    ];
  }
}
