<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\Cliente;
use App\Models\Morada;
use App\Models\Sincronizacao;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'username' => ['required', 'string', 'max:25', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'Sexo' => ['required', 'string', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $IdMorada = Morada::insertGetId([
            'Provincia' => $data['Provincia'],
            'Municipio' => $data['Municipio'],
            'Bairro' => $data['Bairro'],
            'Rua' => $data['Rua'],
            'NumeroCasa' => $data['NumeroCasa']
        ]);

        $IdCliente = Cliente::insertGetId([
            'Origem'=> 'Remota',
            'Nome' => $data['name'],
            'Sexo' => $data['Sexo'],
            'NumeroBilhete' => $data['NumeroBilhete'],
            'Telefone1' => $data['Telefone1'],
            'Telefone2' => $data['Telefone2'],
            'NomeUsuario' => $data['username'],
            'Senha'=> Hash::make($data['password']),
            'IdMorada'=> $IdMorada
        ]);

        Sincronizacao::create([
            'Id'=> $IdCliente,
            'Tabela' => 'Cliente',
            'Accao' => 'Inserir',
        ]);

        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
