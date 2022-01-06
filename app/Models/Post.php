<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'title',
      'slug',
      'content',
  ];
  
    public function getExcerptAttribute()
    {
				// Content hace referencia al content en la db/migrations
        return substr($this->content, 0, 120);
    }

    public function getPublishedAtAttribute()
    {
				// created_at hace referencia al created_at en la db/migrations
        return $this->created_at->format('d/m/Y');
    }

    public function user() {
      return $this->belongsTo(User::class);
  }
}
