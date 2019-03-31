<?php

use Illuminate\Database\Seeder;
use App\Building;
use App\user;

class BuildingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = user::all();
        foreach ($users as $user):
          if($user->hasRole('SAdministrador')):
            $userId = $user->id;
            break;
          endif;
        endforeach;
        
        $building = new Building();
        $building->code_id = "00001";
        $building->nombre = "Edificio 1";
        $building->estado = "San Luis Potosí";
        $building->municipio = "Soledad de Graciano Sanchez";
        $building->colonia = "Fracc. La Sierra";
        $building->calle = "Sierra Negra";
        $building->numero_externo = "522";
        $building->codigo_postal = "78438";
        $building->telefono = "0000000001";
        $building->user_id = $userId;
        $building->save();
    }
}
