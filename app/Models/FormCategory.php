<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCategory extends Model
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

    public function forms()
    {
        return $this->hasMany(WMAForms::class, 'form_category_id');
    }
}
