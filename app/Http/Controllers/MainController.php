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
    public function index(){
        return view('login');
    }

    public function teste(){
        return view('teste');
    }
    
    public function viewEmail() {
        return view('novasenha');
    }

// <<<<<<< HEAD
//     public function novoTeste($data) {
//         // $data['cpf'] = $cpf;
//         // $data['password'] = $password;
//         // dd($data);
//         return $data;
//     }

//     function checkLogin (Request $request){
// // =======
//     function checkLogin (Request $request /*$cpf, $senha*/){
       
// // >>>>>>> c6d3037c789b914dfb9845ad6e04a88c0afed25b
//         $this->validate($request, [
//             'cpf' => 'required|numeric|',
//             'password' => 'required|alphaNum|min:2'
            
//         ], [
//             'cpf.required' => 'O campo CPF é obrigatório.',
//             'cpf.numeric' => 'O campo CPF é precisa ser numérico.',
//             'password.required' => 'O campo senha é obrigatório.',
//             'password.alphaNum' => 'O campo senha precisa ser alfanumérico.'
//         ]);
//             $userData = array(
//                 'cpf' =>$request->get('cpf'),
//                 'password' => $request->get('password'),
                 
//             );

            

//             if(Auth::attempt($userData)){
//                 return redirect('geminus');
             
//             }
//             else{
//                 info($userData);
//                 return back()->with('error', 'Login ou senha incorretos');
              
//             }
//     }

//     function sucessLogin(){
//         return redirect('geminus');
//     }
//     function logout()
//     {
//         Auth::logout();
//         return redirect('login');
//     }

//     public function atualizasenha($password,$email)
//     {
//         $user_id = User::select('id')->where('email', $email)->first();
//         $user_id->password = hash::make($password);
//         $user_id->save();
//     }

//     function gerarsenha()
//     {
//         return str_random(8);
//     }

}
