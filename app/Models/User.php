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

    public function roles()
    {
        return $this->belongsToMany(Role::class); // Pivot: role_user
    }

    public function assignments()
    {
        return $this->hasMany(assignments::class);
    }

    public function archivedDevices()
    {
        return $this->hasMany(device_archive::class, 'archived_by');
    }

    public function stateChanges()
    {
        return $this->hasMany(device_state_history::class, 'changed_by');
    }

    public function assignmentsGiven()
    {
        return $this->hasMany(assignments::class, 'assigned_by');
    }  

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
