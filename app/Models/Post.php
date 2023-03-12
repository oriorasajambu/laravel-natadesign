<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'thumbnail_url',
        'content',
        'status',
        'published_at'
    ];

    protected $dates = ['deleted_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the author for the blog post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get Category for the blog post
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get Meta for the blog post
     */
    public function meta()
    {
        return $this->hasOne(SeoCategory::class, 'post_id');
    }

    /**
     * Get SEO for the blog post
     */
    public function seo()
    {
        return $this->hasOneThrough(Seo::class, SeoCategory::class);
    }

}
