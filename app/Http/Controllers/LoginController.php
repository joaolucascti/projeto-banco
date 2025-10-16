<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LoginController;   
class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }

   public function salvarUsuario(Request $request)
    {
        //dd($request);
        try {
            $usuario = new User();
            $usuario->setEmail($request->email);
            $usuario->setSenha($request->senha);
            $usuario->save();

            echo "Salvo com sucesso";


        } catch (\Exception $ex) {
            echo 'Erro ao gravar: ' . $ex->getMessage();
        }
    }

}
