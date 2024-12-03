<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeNote extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'en_status',
        'sw_status',
        'slug',
        'en_description',
        'sw_description',
        'image',
        'name',
        'created_by',
        'is_active',
    ];

    public function user()
    {
        return  $this->belongsTo(User::class,'created_by');
    }
}
