<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\User;

class EmailController extends Controller
{
    private $email;
    function index()
    {
        return view('esqueceusenha');
    }

    function validaremail(Request $request)
    {
        $this->email = $request->get('email');
        

        $this->validate($request, [
            'email' => 'required|email',

        ], [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Email inválido.'
        ]);

        if (User::where('email', '=', $this->email)->exists()) {
           
            $senha=$this->gerarSenha();
            $this->enviarEmail($senha);
            $this->atualizaSenha($senha);
            $menssagem ='Nova senha enviada';
            return redirect('/esqueceusenha')->with('sucesso', $menssagem);
         }
        else {
            $menssagem = ('Email inválido');
            return redirect('/esqueceusenha')->with('error', $menssagem);

        }
    }

    public function atualizaSenha($senha)
    {
        $user_id = User::select('id')->where('email', $this->email)->first();
        $user_id->senha = $senha;
        $user_id->save();
      
    }

    public function enviarEmail($senha)
    {
        $data = array('name' => "Geminus",'senha' => $senha);

        $menssagem = ('Nova senha gerada.');

        Mail::send(['html' => 'novasenha'], $data, function ($message) {
            $message->to($this->email, 'Administração Geminus')->subject('Nova senha de acesso');
            $message->from('geminusueg@gmail.com', 'Administração Geminus');
        });

    }

    function gerarSenha()
    {
        return str_random(8);
    }
}
