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
    function teste(){
        
        return view('novo');
    }

    function checkLogin (Request $request){
        $this->validate($request, [
            'CPF' => 'required|numeric|',
            'password' => 'required|alphaNum|min:2'
            
        ], [
            'CPF.required' => 'O campo CPF é obrigatório.',
            'CPF.numeric' => 'O campo CPF é precisa ser numérico.',
            'password.required' => 'O campo password é obrigatório.',
            'password.alphaNum' => 'O campo password precisa ser alpha numérico.'
        ]);
            $userData = array(
                'CPF' =>$request->get('CPF'),
                'password' => $request->get('password'),
            );

            if(Auth::attempt($userData)){
                return redirect('main/sucesslogin');
            }
            else{
                info($userData);
                return back()->with('error', 'Login ou password incorretos');
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

    public function atualizasenha($password,$email)
    {
        $user_id = User::select('id')->where('email', $email)->first();
        $user_id->password = hash::make($password);
        $user_id->save();
    }

    function gerarsenha()
    {
        return str_random(8);
    }

}
