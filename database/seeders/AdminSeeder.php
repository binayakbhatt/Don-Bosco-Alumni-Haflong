<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name'=> 'Administrator',
            'last_name'=> 'DBHS Alumni',
            'role'=>'Administrator',
            'batch'=>'0000',
            'city'=>'Haflong',
            'passphrase'=>'I am the Admin',
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email' => 'dbhsalumnihaflong@gmail.com',
            'email_verified_at' => now(),
            'blood_group' => 'O+',
            'remember_token' => Str::random(10),
        ]);
    }
}

