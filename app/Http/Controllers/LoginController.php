<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();
        //if user is a teacher
        $hashedPassword = (hash('sha256',  $user->salt."--". $request['password']));
        if($user != null && $user->teacherships != null){
            if($user->password_hash == $hashedPassword){
                // Authentication passed...
                if($user->teacherships->organization && $user->teacherships->organization->courses){

                    session(['id' => $user->id]);
                    session(['courses' => $user->teacherships->organization->courses->pluck('name', 'id')]);
                    return redirect()->route('course', ['course' =>$user->teacherships->organization->courses->first()->id]);

                } else {
                    return view("/auth/login", ["error_message"=> "No cuentas con cursos para visualizar" ]);
                }
            } else {
                return view("/auth/login", ["error_message"=> "El nombre de usuario o contraseña no es correcto" ]);
            }
        } else{
            return view("/auth/login", ["error_message"=> "El nombre de usuario no corresponde a un profesor registrado" ]);
        }
    }
}