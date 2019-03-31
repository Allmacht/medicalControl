<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sadmin = User::create([
            'name' => 'SAdministrador',
            'email' => 'ulises.jacob.cr@gmail.com',
            'password' => bcrypt('sadministrador')
        ]);

        $sadmin->assignRole('SAdministrador');
        $sadmin->assignRole('Doctor');
    }
}
