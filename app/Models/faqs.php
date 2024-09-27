<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_question',
        'sw_question',
        'slug',
        'en_answer',
        'sw_answer',
        'created_by',
        'is_active',
    ];

    public function user(){

        return $this->belongsTo(user::class, 'created_by');
    }
}
