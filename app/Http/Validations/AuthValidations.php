<?php


namespace App\Http\Validations;


use Illuminate\Http\Request;
use Egulias\EmailValidator\EmailValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthValidations
{
    public function signup(Request $request): V
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|unique:users,login',
            'password' => 'required|string|confirmed|min:8',
            'password_confirmation' => 'required|string|min:8',
        ]);

        return $validator;
    }

    public function login(Request $request): V
    {
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $validator->after(function ($validator) use ($request) {
            if (!$validator->errors()->messages()) {
                $user = User::where('login', $request->login)->first();
                if (!$user) {
                    $validator->errors()->add('login', 'Пользователь не найден');
                    $validator->errors()->add('password', 'Пользователь не найден');
                } else
                if (!Hash::check($request->password, $user->password)) {
                    $validator->errors()->add('password', 'Пароль не верен');
                }
            }
        });
        return $validator;
    }
}