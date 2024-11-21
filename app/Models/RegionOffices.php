<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionOffices extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_person_name',
        'contact_person_position',
        'region_name',
        'slug',
        'en_content',
        'sw_content',
        'location',
        'address',
        'telephone',
        'email',
        'created_by',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'created_by');
    }
}
