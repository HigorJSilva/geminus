<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MainController extends Controller
{
    function index(){
        return view('login');
    }

    function checkLogin (Request $request){
        $this->validate($request, [
            'CPF' => 'required|numeric|',
            'senha' => 'required|alphaNum|min:2'
            
        ], [
            'CPF.required' => 'O campo CPF é obrigatório.',
            'CPF.numeric' => 'O campo CPF é precisa ser numérico.',
            'senha.required' => 'O campo senha é obrigatório.',
            'senha.alphaNum' => 'O campo senha precisa ser alpha numérico.'
        ]);
            $userData = array(
                'CPF' =>$request->get('CPF'),
                'senha' => $request->get('senha'),
            );

            if(Auth::attempt($userData)){
                return redirect('main/sucesslogin');
            }
            else{
                info($userData);
                return back()->with('error', 'Login ou senha incorretos');
            }
    }

    function sucessLogin(){
        return view('sucesslogin');
    }
    function logout()
    {
        Auth::logout();
        return redirect('main');
    }

    public function atualizaSenha($senha,$email)
    {
        $user_id = User::select('id')->where('email', $email)->first();
        $user_id->senha = hash::make($senha);
        $user_id->save();
    }

    function gerarSenha()
    {
        return str_random(8);
    }

}
