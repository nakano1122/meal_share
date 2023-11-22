<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Review extends Model
{
    use HasFactory;
    
    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
    
    protected $fillable = [
        'posts_id',
        'review_comment',
    ];
}
