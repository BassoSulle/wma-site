<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'en_details',
        'sw_details',
        'is_active',
    ];

    public function publicatios(){
        return $this->hasMany(Publications::class);
    }
}
