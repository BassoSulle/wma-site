<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_caption',
        'sw_caption',
        'slug',
        'image',
        'gallery_id',
        'created_by',
        'is_active',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

}
