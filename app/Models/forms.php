<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forms extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'form_category_id',
        'en_file',
        'sw_file',
        'created_by',
        'is_active',
    ];

    public function categories(){

        return $this->belongsTo(form_category::class, 'form_category_id');
    }

    public function user(){

        return $this->belongsTo(user::class, 'created_by');
    }
}
