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
        if($user != null && $user->teacherships != null){
            if($user->password_hash == $request['password']){
                // Authentication passed...
                session(['id' => $user->id]);
                session(['courses' => $user->teacherships->organization->courses->pluck('name', 'id')]);
               return redirect()->route('course', ['course' =>$user->teacherships->organization->courses->first()->id]);
            } else {
                return ('Bad credentials');
            }
        } else{
            return ('Not a teacher');
        }
    }
}