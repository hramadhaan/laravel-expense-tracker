<?php

namespace Database\Seeders;

use App\Models\WalletType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        WalletType::create([
            'name' => 'Cash',
        ]);
        WalletType::create([
            'name' => 'Bank Account',
        ]);
        WalletType::create([
            'name' => 'Credit',
        ]);
        WalletType::create([
            'name' => 'Deposit',
        ]);
    }
}
