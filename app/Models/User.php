<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'photo',
        'gender',
        'email',
        'password',
        'slug',
        'birthplace',
        'birthdate',
        'address',
        'province',
        'city',
        'district',
        'village',
        'whatsapp',
    ];

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
    ];
    protected $with = [
        'indonesiaProvince',
        'indonesiaCity',
        'indonesiaDistrict',
        'indonesiaVillage',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
                ]      
            ];
    }
    public function indonesiaProvince(){
        return $this->hasOne(IndonesiaProvince::class,'code','province');
    }
    public function indonesiaCity(){
        return $this->hasOne(IndonesiaCity::class,'code','city');
    }
    public function indonesiaDistrict(){
        return $this->hasOne(IndonesiaDistrict::class,'code','district');
    }
    public function indonesiaVillage(){
        return $this->hasOne(IndonesiaVillage::class,'code','village');
    }
}
