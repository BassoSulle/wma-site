<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\News;
use App\Models\Events;
use App\Models\Carousel;
use App\Models\speeches;
use App\Models\Vacancies;
use App\Models\PressRelease;
use App\Models\Publications;
use App\Models\Announcements;
use App\Models\RegionOffices;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

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


    public function carousels()
    {
        return  $this->hasMany(Carousel::class);
    }
    public function news()
    {

        return  $this->hasMany(News::class);
    }

    public function events()
    {

        return  $this->hasMany(Events::class);
    }
    public function wmaforms()
    {

        return  $this->hasMany(WMAForms::class);
    }

    public function announcements()
    {

        return  $this->hasMany(Announcements::class);
    }

    public function publications()
    {

        return  $this->hasMany(Publications::class);
    }

    public function speeches()
    {

        return  $this->hasMany(speeches::class);
    }

    public function vacancies()
    {

        return  $this->hasMany(Vacancies::class);
    }


    public function press_releases()
    {

        return  $this->hasMany(PressRelease::class);
    }

    public function photo()
    {

        return  $this->hasMany(Photos::class);
    }
    public function gallery()
    {

        return  $this->hasMany(Gallery::class);
    }
    public function video()
    {

        return  $this->hasMany(Video::class);
    }

    public function region_offices()
    {

        return  $this->hasMany(RegionOffices::class);
    }

    public function services()
    {

        return  $this->hasMany(Services::class);
    }

    public function how_do_i()
    {

        return  $this->hasMany(how_do_i::class);
    }
    public function welcome_note()
    {

        return  $this->hasMany(WelcomeNote::class);
    }

    public function brochures()
    {

        return  $this->hasMany(Brochures::class);
    }
    public function posters()
    {

        return  $this->hasMany(Posters::class);
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
