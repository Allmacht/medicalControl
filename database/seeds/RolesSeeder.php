<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sadmin = Role::create([
          'name'=>'SAdministrador'
        ]);

        $admin = Role::create([
          'name'=>'Administrador'
        ]);

        $doctor = Role::create([
          'name' => 'Doctor'
        ]);

        $recep = Role::create([
          'name' => 'Recepcionista'
        ]);
    }
}
