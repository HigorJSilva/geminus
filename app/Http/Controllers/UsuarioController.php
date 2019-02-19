<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UsuarioController extends Controller
{
    public function index(){
        
        return view('usuario.cadastroUsuario');
    }


    function cadastrar(Request $request){
      
        $this->validation($request);
        $input = $request->except('_token');
        $request['password']= bcrypt($input['password']);
        User::create($request->all());
        return redirect('geminus');

    }

    public function editar($id){
        $resource = User::find($id);

        return view('usuario.cadastroUsuario', compact('resource'));
    }
   
    public function alterar(Request $request){
        $this->valida($request);
        
        User::where('id',$request->id)->update($request->all());
        return redirect('/listar');
      ///  return view('usuario.cadastroUsuario', compact('resource'));
    }


    function listar(Request $request){
    
        $usuarios = User::all();
        return view('usuario.listarUsuarios')->with("usuarios", $usuarios );

    }

    function excluir( $id){
        $user = User::find($id);
        $user->delete();
        $usuarios = User::all();
        return view('usuario.listarUsuarios')->with("usuarios",  $usuarios );

    }


    function valida(Request $request){
        
        $this->validate($request, [
            'CPF' => 'required|numeric|digits:11',
            
            'email'=> 'required|email|'
            
        ], [
            'CPF.required' => 'O campo CPF é obrigatório.',
            'password.min' => 'O campo senha precisa ter no mínimo 2 caracteres.',
            'CPF.numeric' => 'O campo CPF precisa ser numérico.',
            'CPF.digits' => 'O campo CPF precisa ter 11 dígitos.',
           
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Email inválido. Por favor insira um endereço de Email válido.'
        ]);
    }

    function validation(Request $request){
        
        $this->validate($request, [
            'CPF' => 'required|numeric|digits:11',
            'password' => 'required|alpha_num|min:2',
            'email'=> 'required|email|'
            
        ], [
            'CPF.required' => 'O campo CPF é obrigatório.',
            'password.min' => 'O campo senha precisa ter no mínimo 2 caracteres.',
            'CPF.numeric' => 'O campo CPF precisa ser numérico.',
            'CPF.digits' => 'O campo CPF precisa ter 11 dígitos.',
            'password.required' => 'O campo Senha é obrigatório.',
            'password.alpha_num' => 'O campo Senha precisa ser alfanumérico.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Email inválido. Por favor insira um endereço de Email válido.'
        ]);
    }
    

}
