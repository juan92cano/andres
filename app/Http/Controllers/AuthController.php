<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Función que muestra la vista de logados (registradros en la base de datos) o la vista con el formulario
     */
    public function index(){
        // Comprobamos si el usuario ya está logado
        if (Auth::check()){
            // Si existe le mostramos la vista de logados
            return view('logados');
        }

        // Si no existe mostramos la vista de login
        return view('login');
    }

    /**
     * Función que se encarga de recibir los datos del formulario de login. 
     * en caso correcto loggea al usuario
     */
    public function login(Request $request){
        //comprobamos que Email y Contraseña sean correctas
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //Almacenamos email password
        $credentials = $request->only('email','password');

        //Si existe se lleva a la vista logados y se muestra mensaje
        if (Auth::attempt($credentials)){
            return redirect()->intended('logados')->withSuccess('Login se realizó correctamente');
        }

        //Si no existe se redirecciona a formulario de login y se muestra mensaje
        return redirect("/")->withSuccess('Los datos no son correctos');
    }

    /**
     * Funcion que muestra la vista de logado o form de login, segun sea el caso.
     */
    public function logados(){
        if(Auth::check()){
            return view('logados');
        }

        return redirect("/")->withSuccess('No tienes acceso. por favor registrate');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect("/")->withSuccess('Cierre de sesión correcto');
    }
}
