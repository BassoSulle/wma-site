<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_title',
        'sw_title',
        'slug',
        'pub_category_id',
        'en_file',
        'sw_file',
        'created_by',
        'is_active',
    ];

    public function pubilication_category(){

        return $this->belongsTo(PublicationCategory::class);
    }

    public function user(){

        return $this->belongsTo(user::class, 'created_by');
    }
}
