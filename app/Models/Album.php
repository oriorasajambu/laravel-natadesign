<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'albums';

    protected static function boot()
    {
        parent::boot();

        Album::creating(function ($model) {
            $model->position = Album::max('position') + 1;
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'cover_id',
        'album_detail',
        'album_description',
        'position'
    ];

    protected $dates = ['deleted_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function cover()
    {
        return $this->belongsTo(Gallery::class, 'cover_id');
    }

    public function photos()
    {
        return $this->hasManyThrough(Gallery::class, Photo::class, null, 'id', null, 'gallery_id')->orderBy('position', 'asc');
    }

    public function photo()
    {
        return $this->hasMany(Photo::class);
    }
}
