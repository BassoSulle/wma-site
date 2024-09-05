<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'en_description',
        'sw_description',
        'image',
        'created_by',
        'slug',
        'is_active',
    ];
    public function user()
    {
        return  $this->belongsTo(User::class, 'created_by');
    }
}
