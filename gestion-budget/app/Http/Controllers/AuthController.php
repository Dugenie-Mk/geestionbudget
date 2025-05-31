<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    //ecrire la requette de validation du formulaire d'inscription

    public function inscription(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email'=> 'required|email|max:255|unique:users',
            'password'=> 'required|string|min:4|max:8|confirmed',
        ]);
        //afficher l'erreur lorsque l'utilisateur n'a pas entrer les bons trucs precedents
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //creer l'utilisateur

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);

        //rediriger vers la page de connexion

        return redirect('/login')->with('status','L\'etudiant a ete ajoute avec succes.');
    }
}
