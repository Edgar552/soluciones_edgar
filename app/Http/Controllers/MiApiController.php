<?php


namespace App\Http\Controllers;

use App\Models\MiApiModel;
use Illuminate\Http\Request;

use App\Http\Requests\MiApiRequest;


class MiApiController extends Controller
{

    public function show()
    {
        $Modelo = MiApiModel::all();
        return $Modelo;
    }

    public function store(MiApiRequest $request)
    {
        $Modelo=(new MiApiModel)->fill( $request->validated() );
        $Modelo->save();
        return $Modelo;
    }


    public function update(MiApiModel $id,Request $request)
    {
        $id->update( $request->validate(['nombre'=>'required']) );
         return $id;
    }

    public function destroy(MiApiModel $id)
    {
         $id->delete();
         return $id;
    }
}
