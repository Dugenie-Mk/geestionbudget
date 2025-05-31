<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    //ecrire la requette de validation du formulaire d'inscription

    public function inscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:4|max:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);
    
        return redirect()->route('login')
                        ->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $credentials['email'])->first();
    
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors([
                'email' => 'Identifiants incorrects',
            ])->onlyInput('email');
        }
    
        return redirect()->intended('/');
    }

    public function logout(Request $request)
   {
   
       // Déconnexion Laravel standard
       Auth::logout();
   
       // Invalider la session
       $request->session()->invalidate();
   
       // Régénérer le token CSRF
       $request->session()->regenerateToken();
   
       return redirect('/')->with('status', 'Vous avez été déconnecté avec succès');
   }
}
