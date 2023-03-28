<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'student_tb';
    protected $guarded = [];
    // protected $fillable = [
    //     'programmed_id',
    //     'first_name',
    //     'last_name',
    //     'middle_name',
    //     'phone_no',
    //     'gender',
    //     'birthday',
    //     'Address_1',
    //     'Address_2',
    //     'phone',
    //     'language',
    //     'skills',
    //     'email',
    //     'password',
    // ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
    public function department(): HasOne
    {
        return $this->hasOne(Department::class);
    }

    public function isHnd()
    {
        return $this->programme_id == 1;
    }

    public function isNd_or_Nce()
    {
        return $this->programme_id == 2;
    }
    public function DiplomaSpecial()
    {
        return $this->programme_id == 3;
    }

    public function isPolytechnicDiploma()
    {
        return $this->programme_id == 4;
    }

}
