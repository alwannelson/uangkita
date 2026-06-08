<?php

namespace Database\Seeders;

use App\Models\SavingGroup;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {
        $nelson = User::create([
            'name' => 'Nelson',
            'username' => 'nelson',
            'email' => 'nelson@example.com',
            'password' => Hash::make('password'),
            'pin' => Hash::make('123456'),
        ]);

        $ferry = User::create([
            'name' => 'Ferry Wijaya',
            'username' => 'ferry',
            'email' => 'ferry@example.com',
            'password' => Hash::make('password'),
            'pin' => Hash::make('123456'),
        ]);

        $sahid = User::create([
            'name' => 'Sahid Dwi',
            'username' => 'sahid',
            'email' => 'sahid@example.com',
            'password' => Hash::make('password'),
            'pin' => Hash::make('123456'),
        ]);

        $groupBali = SavingGroup::create([
            'name' => 'Liburan ke Bali ✈️',
            'category' => 'friend',
            'description' => 'Nabung untuk tiket pesawat dan penginapan di Bali',
            'target_amount' => 3000000,
            'icon' => '🏝️',
            'color' => '#10b981',
            'created_by' => $nelson->id,
        ]);

        $groupRumah = SavingGroup::create([
            'name' => 'Beli Rumah Impian 🏠',
            'category' => 'family',
            'description' => 'Nabung buat dp rumah',
            'target_amount' => 50000000,
            'icon' => '🏠',
            'color' => '#f59e0b',
            'created_by' => $nelson->id,
        ]);

        $groupBali->members()->attach($nelson->id, ['role' => 'admin', 'joined_at' => now()]);
        $groupBali->members()->attach($ferry->id, ['role' => 'member', 'joined_at' => now()]);
        $groupBali->members()->attach($sahid->id, ['role' => 'member', 'joined_at' => now()]);

        $groupRumah->members()->attach($nelson->id, ['role' => 'admin', 'joined_at' => now()]);
        $groupRumah->members()->attach($ferry->id, ['role' => 'member', 'joined_at' => now()]);

        Transaction::create([
            'group_id' => $groupBali->id,
            'user_id' => $nelson->id,
            'type' => 'deposit',
            'amount' => 500000,
            'note' => 'Setoran awal liburan',
            'status' => 'success',
            'transaction_code' => 'TRX-BALI-001',
            'paid_at' => now(),
        ]);

        Transaction::create([
            'group_id' => $groupBali->id,
            'user_id' => $ferry->id,
            'type' => 'deposit',
            'amount' => 300000,
            'note' => 'Setoran pertama',
            'status' => 'success',
            'transaction_code' => 'TRX-BALI-002',
            'paid_at' => now(),
        ]);

        Transaction::create([
            'group_id' => $groupBali->id,
            'user_id' => $sahid->id,
            'type' => 'deposit',
            'amount' => 200000,
            'note' => 'Semangat liburan!',
            'status' => 'success',
            'transaction_code' => 'TRX-BALI-003',
            'paid_at' => now(),
        ]);


        Transaction::create([
            'group_id' => $groupRumah->id,
            'user_id' => $nelson->id,
            'type' => 'deposit',
            'amount' => 1000000,
            'note' => 'Setoran awal rumah',
            'status' => 'success',
            'transaction_code' => 'TRX-RMH-001',
            'paid_at' => now(),
        ]);

        Transaction::create([
            'group_id' => $groupRumah->id,
            'user_id' => $ferry->id,
            'type' => 'deposit',
            'amount' => 500000,
            'note' => 'Semoga cepet kebeli',
            'status' => 'success',
            'transaction_code' => 'TRX-RMH-002',
            'paid_at' => now(),
        ]);

        $this->command->info('Dummy data created.');
    }
}
