<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupInvite extends Model
{
    use HasFactory;

    protected $table = 'group_invites';

    protected $fillable = [
        'group_id',
        'token',
        'email',
        'expires_at',
    ];

    protected function casts(): array
    {
        return [
            'expires_at' => 'datetime',
        ];
    }

    public function group()
    {
        return $this->belongsTo(SavingGroup::class);
    }

    public function isValid()
    {
        return $this->expires_at->isFuture();
    }

    public function isExpired()
    {
        return $this->expires_at->isPast();
    }
}
