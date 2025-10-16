<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{

    public function index()
    {
        return view('usuario');

    }
    public function salvarUsuario(Request $request)
    {
        dd($request);

        try
        {
          
           $usuario = Disciplina::findOrNew($request->id);
           $usuario->setEmail($request->email);
           $usuario->setSenha($request->senha);
           $usuario->save();
        }
        catch(\Exception $ex)
        {
            return Redirect::back()->withErrors('Erro ao tentar salvar a Disciplina: '.$ex->getMessage());
        }
       
            
    }

}