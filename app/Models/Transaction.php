<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'group_id',
        'user_id',
        'type',
        'amount',
        'note',
        'proof_image',
        'status',
        'transaction_code',
        'paid_at',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'paid_at' => 'datetime',
        ];
    }

    public function group()
    {
        return $this->belongsTo(SavingGroup::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isDeposit()
    {
        return $this->type === 'deposit';
    }

    public function isWithdraw()
    {
        return $this->type === 'withdraw';
    }

    public function isSuccess()
    {
        return $this->status === 'success';
    }

    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }
}
