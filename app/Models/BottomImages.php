<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BottomImages extends Model
{
    use HasFactory;

    protected $table = 'bottom_image';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'image',
        'original',
        'alt',
        'position',
    ];
}
