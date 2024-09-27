<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'sw_name',
        'slug',
        'en_content',
        'sw_content',
        'image',
        'icon',
        'created_by',
        'is_active',
    ];

    public function user()
    {
        return  $this->belongsTo(User::class,'created_by');
    }
}
