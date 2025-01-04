<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_vision',
        'sw_vision',
        'slug',
        'en_mission',
        'sw_mission',
        'is_active',
        'created_by',

    ];

    public function user(){
        return  $this->belongsTo(User::class, 'created_by');
    }
}
