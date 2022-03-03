<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  use HasFactory;

  protected $guarded = ['id'];

  protected $with = ['category', 'author'];

  protected $dates = ['published_at'];


  public function getRouteKeyName() 
  {
    return 'slug';
  }  

  public function scopeNewest()
  {
    return $this->orderBy('published_at', 'desc');
  }

  public function scopePopular()
  {
    return $this->orderBy('views', 'desc')->limit(5);
  }

  public function scopeFilter($query, array $filters)
  {
    $query->when($filters['search'] ?? false, fn ($query, $search) =>
      $query->where(fn ($query) =>
        $query->where('title', 'like', '%'.$search.'%')
      )
    );

    $query->when($filters['category'] ?? false, fn ($query, $category) =>
      $query->whereHas('category', fn ($query) =>
        $query->where('slug', $category)
      )
    );

    $query->when($filters['author'] ?? false, fn ($query, $author) =>
      $query->whereHas('author', fn ($query) =>
        $query->where('username', $author)
      )
    );
  }


  public function category()
  {
    return $this->belongsTo(Category::class);
  }


  public function author()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

}