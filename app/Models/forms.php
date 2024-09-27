<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
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

    public function form_categories(){

        return $this->belongsTo(FormCategory::class, 'form_category_id');
    }

    public function user(){

        return $this->belongsTo(user::class, 'created_by');
    }
}
