<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([     
            'name' => 'AdminDante', 
            'email' => 'admindante@test.com', 
            'password' => bcrypt('admindantepassword'), 
            'is_admin' => 1,
        ]);
    }
}
