<?php

namespace App\Modules\User\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'         => Str::ulid()->toBase32(),
            'name'       => 'Ecoassist',
            'email'      => 'ecoassist@ecoassist.com.br',
            'password'   => Hash::make('ecoassist'),
            'phone'      => '11912345678',
            'active'     => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
