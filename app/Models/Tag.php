<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Post;

class Tag extends Model
{
    use HasFactory;
    
    public function getByTag(int $limit_count = 10)
    {
        //今は更新日時でorderしているが、いいね機能がついたらいいね数でorderする
        return $this->posts()->with('tags')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
