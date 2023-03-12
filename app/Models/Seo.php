<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory, \Conner\Tagging\Taggable;

    protected $table = 'seo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'seo_category_id',
        'page_title',
        'meta_description',
        'meta_authors',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image_url',
        'og_url',
    ];
}
