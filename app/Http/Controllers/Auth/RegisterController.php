<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\RolMail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $token = Str::random(60);
        $url = env('APP_URL');//Cuando se suba al hosting tine que agregar esta variable de entorno, el cual es el link si no van a tener problemas
        $NewEmail = $data['email'];
        $newLink = "$url/NuevoRol/$NewEmail/$token";
        $email = "arianaleal0220@gmail.com";
        $messages = "Solicitud cambio de rol usuario $NewEmail";
        Mail::to($email)->send(new RolMail($email,$messages,$newLink));
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'rol_id' => '3',
            'depar_id' => '1',
            'password' => Hash::make($data['password']),
            'token'=> $token, 
            'remember_token' => $token,
        ]);

    }
}
