<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Building;
use App\User;

class BuildingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $busqueda = Input::get('busqueda');
        $buildings = Building::where(DB::raw("CONCAT(nombre,' ',code_id,' ',estado,' ',municipio,' ',colonia,' ',calle)"),'like',"%$busqueda%")
          ->paginate(10);
        return view('Buildings.index', compact('busqueda','buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->hasRole('SAdministrador')) {
          $users = User::whereStatus(true)->get();

          $res = null;
          do{
            $code = $this->code();
            $building = Building::where('code_id',$code)->get();
            $res = $building->isEmpty();
          }while($res == false);

          return view('Buildings.create', compact('users','code'));
        }else{
          abort(404);
        }
    }

    public function code(){
      $nip = (string)rand(0,99999);
      if (strlen($nip) < 5):
        $nip  = str_pad($nip, 5, "0",STR_PAD_LEFT);
      endif;
      return $nip;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->hasRole('SAdministrador')):

          $request->validate([
            'code_id'=>'required|numeric|digits:5|unique:buildings',
            'nombre' => 'required|alpha_num|unique:buildings|min:2',
            'numero_externo' => 'required|numeric',
            'numero_interno' => 'nullable|alpha_num',
            'codigo_postal' => 'required|numeric|digits:5',
            'telefono' => 'required|numeric|min:10',
            'telefono_secundario' => 'nullable|numeric|min:10',
            'user_id' => 'required|numeric'
          ],[
            'code_id.required' => 'El Código único es requerido',
            'code_id.numeric' => 'El código único tiene que ser numérico',
            'code_id.digits' => 'La longitud del código único debe ser máximo de 5 digítos',
            'code_id.unique' => 'El código único ya está en uso',
            'nombre.required' => 'El nombre es requerido',
            'nombre.alpha_num' => 'El nombre debe ser alfanumérico',
            'nombre.unique' => 'El nombre ingresado ya está en uso',
            'nombre.min' => 'La longitud del nombre debe ser mínimo de 2 caracteres',
            'numero_externo.required' => 'El número exterior es requerido',
            'numero_externo.numeric' => 'El número exterior no es válido',
            'numero_interno.alpha_num' => 'El número interior no es válido',
            'codigo_postal.required' => 'El código postal es requerido',
            'codigo_postal.numeric' => 'El código postal debe ser numérico',
            'codigo_postal.digits' => 'La longitud del código postal debe ser de 5 dígitos',
            'telefono.required' => 'El teléfono es requerido',
            'telefono.numeric' => 'El teléfono ingresado no es válido',
            'telefono.min' => 'El teléfono debe contener mínimo 10 dígitos',
            'telefono_secundario.numeric' => 'El teléfono secundario ingresado no es válido',
            'telefono_secundario.min' => 'El teléfono secundario debe contener mínimo 10 dígitos',
            'user_id.required' => 'El campo administrador es requerido',
            'user_id.numeric' => 'El valor del campo administrador no es válido'
          ]);

          $building = new Building();
          $building->code_id = $request->code_id;
          $building->nombre = $request->nombre;
          $building->estado = $request->estado;
          $building->municipio = $request->municipio;
          $building->colonia = $request->colonia;
          $building->calle = $request->calle;
          $building->numero_externo = $request->numero_externo;
          $building->numero_interno = $request->numero_interno;
          $building->codigo_postal = $request->codigo_postal;
          $building->user_id = $request->user_id;
          $building->telefono = $request->telefono;
          $building->telefono_secundario = $request->telefono_secundario;

          $building->save();

          return redirect()->route('buildings.index')->withStatus('Se ha registrado el edificio correctamente');

        else:
          abort(404);
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function disable(Request $request){
       
       dd($request->code_id);

     }
    public function destroy($id)
    {
        //
    }
}
