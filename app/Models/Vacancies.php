<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancies extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'en_file',
        'sw_file',
        'start_date',
        'end_date',
        'sw_file',
        'created_by',
        'is_active',
    ];

    public function user(){

        return $this->belongsTo(user::class, 'created_by');
    }
}
