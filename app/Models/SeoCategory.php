<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoCategory extends Model
{
    use HasFactory;

    protected $table = 'seo_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'post_id',
    ];

    public function seo()
    {
        return $this->hasOne(Seo::class, 'seo_category_id');;
    }
}
