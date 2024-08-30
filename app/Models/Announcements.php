<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'en_description',
        'sw_description',
        'is_active',
        'created_by',

    ];

    public function user(){
        return  $this->belongsTo(User::class, 'created_by');
    }
}
