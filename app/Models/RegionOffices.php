<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionOffices extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_name',
        'slug',
        'en_content',
        'sw_content',
        'location',
        'address',
        'fax',
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
