<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
    ];


    public function carousels(){
        return  $this->hasMany(Carousel::class);
    }
    public function news(){

        return  $this->hasMany(News::class);
    }

    public function events(){

        return  $this->hasMany(Events::class);
    }

    public function announcements(){

        return  $this->hasMany(Announcements::class);
    }

    public function forms(){

        return  $this->hasMany(forms::class);
    }

    public function publications(){

        return  $this->hasMany(publications::class);
    }

    public function speeches(){

        return  $this->hasMany(speeches::class);
    }

    public function vacancies(){

        return  $this->hasMany(Vachancies::class);
    }


    public function press_releases(){

        return  $this->hasMany(press_releases::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
