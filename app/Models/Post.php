<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'meal_name',
        'meal_image_url',
        'post_comment',
    ];
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
