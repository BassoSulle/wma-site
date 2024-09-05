<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'en_description',
        'sw_description',
        'image',
        'created_by',
        'is_active',
    ];

    public function user()
    {
        return  $this->belongsTo(User::class,'created_by');
    }
}
