<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brochures extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'en_file',
        'sw_file',
        'created_by',
        'is_active',
    ];

    public function user()
    {

        return $this->belongsTo(user::class, 'created_by');
    }
}
