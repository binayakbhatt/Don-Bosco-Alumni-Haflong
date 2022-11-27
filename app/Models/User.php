<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
       'last_name',
        'email',
        'password',
        'passphrase',
        'role',
        'profile_picture',
        'batch',
        'dob',
        'phone',
        'occupation',
        'city',
        'state',
        'country',
        'pin_code',
        'aboutme',
        'blood_group',
        'blood_donor',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'passphrase'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dob'=>'date',
        'email_verified_at' => 'datetime',
        'passphrase' => 'encrypted',
        'blood_donor' => 'boolean',
    ];

  

public function toSearchableArray()
{
    return [
        
        'first_name' => $this->first_name,
        'city' => $this->city,
        'batch' => $this->batch,
        'blood_group'=>$this->blood_group,
    ];
}
}
