<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'born_birth',
        'date_birth',
        'gender',
        'no_telp',
        'last_education',
        'address',
        'role',
        'bio',
        'profile_img',
        'status',
        'id_team'
    ];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function company()
    {
        return $this->hasMany(CompanyUsers::class, 'id_users', 'id');
    }

    public function partner()
    {
        return $this->hasMany(PartnerModel::class, 'id_users', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}