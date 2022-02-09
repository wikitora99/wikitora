<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{

  protected $guarded = 'id';

  public function scopeReorder()
  {
    $query = DB::table('categories')
              ->join('articles', 'categories.id', '=', 'articles.category_id')
              ->select('categories.*', DB::raw('count(articles.id) as total'))
              ->groupBy('categories.name')->orderBy('total', 'desc');

    return $query;
  }

  public function posts()
  {
    return $this->hasMany(Article::class);
  }

}
