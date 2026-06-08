<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingGroup extends Model
{
    use HasFactory;

    protected $table = 'saving_groups';

    protected $fillable = [
        'name',
        'category',
        'description',
        'target_amount',
        'icon',
        'color',
        'created_by',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'group_members', 'group_id', 'user_id')
            ->withPivot('role', 'joined_at')
            ->withTimestamps();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function invites()
    {
        return $this->hasMany(GroupInvite::class);
    }

    public function groupMembers()
    {
        return $this->hasMany(GroupMember::class);
    }

    public function getTotalCollectedAttribute()
    {
        return $this->transactions()
            ->where('type', 'deposit')
            ->where('status', 'success')
            ->sum('amount');
    }

    public function getProgressPercentageAttribute()
    {
        if (!$this->target_amount || $this->target_amount == 0) {
            return 0;
        }

        $percentage = ($this->total_collected / $this->target_amount) * 100;

        return min(100, round($percentage, 2));
    }

    public function isAdmin($userId)
    {
        return $this->members()
            ->where('user_id', $userId)
            ->wherePivot('role', 'admin')
            ->exists();
    }

    public function isMember($userId)
    {
        return $this->members()
            ->where('user_id', $userId)
            ->exists();
    }
}
