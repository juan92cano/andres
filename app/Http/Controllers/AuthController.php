<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Función que muestra la vista de index (registradros en la base de datos) o la vista con el formulario
     */
    public function index(){
        // Comprobamos si el usuario ya está logado
        if (Auth::check()){
            // Si existe le mostramos la vista de index
            return view('index');
        }

        // Si no existe mostramos la vista de login
        return view('login/login');
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

        //Si existe se lleva a la vista index y se muestra mensaje
        if (Auth::attempt($credentials)){
            return redirect()->intended('index')->with('success', 'Bienvenido de nuevo...');
        }

        //Si no existe se redirecciona a formulario de login y se muestra mensaje
        return redirect("/")->with('error', 'Los datos no son correctos');
    }

    /**
     * Funcion que muestra la vista de logado o form de login, segun sea el caso.
     */
    public function logados(){
        if(Auth::check()){
            return view('index');
        }

        return redirect("/")->with('error', 'No tienes acceso. por favor registrate');
    }

    /**
     * Funcion para cerrar sesion 
     */
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect("/")->with('warning', 'Cierre de sesión correcto');
    }

        /**
     * Funcion para cerrar sesion por tiempo de no uso
     */
    public function logout_time(){
        Auth::logout();
        Session::flush();
        return redirect("/")->with('error', 'Su sesión expiró. Vuelva ingresar sus credenciales');
    }
}