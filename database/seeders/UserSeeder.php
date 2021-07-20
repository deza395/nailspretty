<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'debora',
            'email'=>'debora@gmail.com',
            'password'=>bcrypt('asd123')
        ])->assignRole('admin');
    
    }
}
