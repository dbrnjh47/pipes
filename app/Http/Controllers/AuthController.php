<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Http\Validations\AuthValidations;
use App\Models\User;


class AuthController extends Controller
{
    
    public function __construct()
    {
        $this->validator = new AuthValidations();
    }

    public function signup(Request $request)
    {
        $validator = $this->validation($request);
        $user = new User();
        $user->login = $request->login;
        $user->password = bcrypt($request->password);

        $user->save();

        Auth::login($user, true);
        $token = $user->createToken('remember_token1')->plainTextToken;
        return response(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $validator = $this->validation($request);

        $user = User::where('login', $request->login)->first();
        Auth::login($user, true);
        return;
    }

    public function logout()
    {
        // auth()->user()->tokens()->delete();
        Auth::logout();
        return redirect('/');
    }

    public function reset(Request $request)
    {
        //
    }
}


