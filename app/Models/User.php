<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    
    /**
     * The attributes that are mass assignable.
    *
    * @var list<string>
    */
    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'pin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'pin',
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
            'pin' => 'hashed',
        ];
    }

    public function createdGroups()
    {
        return $this->hasMany(SavingGroup::class, 'created_by');
    }

    public function groups()
    {
        return $this->belongsToMany(SavingGroup::class, 'group_members', 'user_id', 'group_id')
            ->withPivot('role', 'joined_at')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function groupMembers()
    {
        return $this->hasMany(GroupMember::class);
    }
}
