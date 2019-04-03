<?php

use Illuminate\Database\Seeder;
use App\personal_information as informations;
use App\Building;
use App\User;

class personalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $buildingId = Building::first()->value('id');
        $userId = User::first()->value('id');

        $info = new informations();
        $info->code_id = '00001';
        $info->nombres = 'Ulises Jacob';
        $info->apellido_paterno = 'Calva';
        $info->apellido_materno = 'Robledo';
        $info->fecha_nacimiento = '1995-03-06';
        $info->estado = 'San Luis Potosí';
        $info->municipio = 'Soledad de Graciano Sanchez';
        $info->colonia = 'La sierra';
        $info->calle = 'Sierra negra';
        $info->numero_exterior = '522';
        $info->codigo_postal = '78438';
        $info->telefono_celular = '4448402737';
        $info->rfc = '1234567890123'; //12 a 13 caracteres
        $info->curp = 'AAAAAAAAAAAAAAAAA1'; //18 digitos alfanumericos
        $info->seguro_social = '11111111111'; //11 digitos
        $info->cedula_profesional = '12345678';
        $info->contacto = 'Mariana';
        $info->telefono_contacto = '4445801507';
        $info->building_id = $buildingId;
        $info->fecha_ingreso = '2019-04-01';
        $info->user_id = $userId;

        $info->save();
    }
}
