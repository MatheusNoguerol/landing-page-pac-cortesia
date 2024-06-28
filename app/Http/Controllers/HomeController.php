<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participantes;

class HomeController extends Controller
{
    public static function emiteCortesiaUsuario(Request $request)
    {
        $verificaParticipante = Participantes::where('NOME', '=', $request->nome)->where('TELEFONE', '=', preg_replace('/[^A-Za-z0-9 ]/', '', $request->telefone))->get();

        if(count($verificaParticipante) > 0){
            return ['ref' => 1, 'msg' => 'Participante já concluiu a inscrição.'];
        }else{
            $query = new Participantes;

            $query->NOME = $request->nome;
            $query->TELEFONE = preg_replace('/[^A-Za-z0-9 ]/', '', $request->telefone);

            $query->save();

            return ['ref' => 2, 'msg' => 'Participante inscrito.'];
        }
    }
}
