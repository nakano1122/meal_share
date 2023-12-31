<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Review;
use App\Models\User;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'meal_name',
        'meal_image_url',
        'post_comment',
    ];
    /*
    public function getPaginateByLimit(int $limit_count)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    */
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function isLiked($user): bool {
        return Like::where('user_id', $user->id)->where('post_id', $this->id)->first() !==null;
    }
}
