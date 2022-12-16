<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use Session;
use Cookie;

class AuthController extends Controller
{

    /**
     * Cette fonction renvoie sur la home page si
     * L'utilisateur  est soit l'administrateur soit un vendeur
     */
    public function home(){
        return view('admin.index');
    }

    /**
     * Renvoyer la page login
     */
    public function index(){
        $request = new Request();
        return $this->getCredentialsCoockies($request);
    }

    /**
     * Cette fonction appele la bonne foontion de login en fonction du type
     * d'utilisater qui veut se connecter
     */
    public function customDispatcher(Request $request){

        if($request->is_admin == NULL)return $this->loginVendeur($request);
        else{

            // $request->is_admin = true;
            // if($request->remember_me == NULL) $request->remember_me = false;
            // else $request->remember_me = true;
        }
        // if(1){

        //     return $this->loginVendeur($request);
        // }
    }


    /**
     * Cette focntion se charge de sauvegarder les coockies du user
     * @param [string] data
     */
    private function setCredentialsCoockies($request){

        $data = [
            'password' => $request->password,
            'email' => $request->email,
        ];
        $cookie = cookie()->forever('credentials', json_encode($data));
        return redirect()->route('dashbord')->withCookie($cookie);
    }

    /**
     * Recuperation des coockies
     */
    public function getCredentialsCoockies(Request $request) {

        // Recuperation et decodage des coockies
        $cookie_json = Cookie::get('credentials');
        $cookie = json_decode($cookie_json);
        if($cookie){

            if($cookie->password && $cookie->email){
                // on store les credentials en sessions
                Session::put('password', $cookie->password);
                Session::put('email', $cookie->email);
            }

        }
        //redirection vers le login page
        return response(view('auth.login'));

     }

     /**
      * Cette foonction deconnecte l'utilisateur et supprime les coockies
      */
     public function logout(){

         Cookie::forget('credentials');
         Cookie::forget('XSRF-TOKEN');

         Session::forget('password');
         Session::forget('email');
         Session::forget('auth_success');
         Session::forget('auth_failed');
         Session::forget('token');

        return  view('auth.login');
     }



     /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function loginVendeur(Request $request)
    {

        // Step 1: Validation des donnees
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean',
            'is_admin' => 'boolean',
        ]);

        // Step 1.1 : extraction des donnees

        $credentials = request(['email', 'password']);


        // Step 2 : Tentative de connexion
        if(!Auth::attempt($credentials)){
            Session::put('auth_failed', 'Vos identifiant sont incorrecte.');
            Session::forget('auth_success');
            return view('auth.login');
        }

        // Step 2.1 : Initialisation des variable de sessions
        Session::put('auth_success', 'Authentification reussi.');
        Session::forget('auth_failed');

        // Step 3 : Connexion reussi - Generation du token pour les vendeur
        $user = Auth::user();
        $token = $user->createToken('MyApp', ['vendeur'])->accessToken; //  Vendeur toke

        // Step 4 : Sauvegarde du token en session
        Session::put('token', $token);

        // Step 5 : Suppressoin des credentials en session
        Session::forget('password');
        Session::forget('email');


        // if ($request->remember_me)
        //     $token->expires_at = Carbon::now()->addWeeks(1);

        //     if($token->save()){
        //         return response()->json([
        //             'success' => 1,
        //             'access_token' => $tokenResult->accessToken,
        //             'token_type' => 'Bearer',
        //             'expires_at' => Carbon::parse(
        //                 $tokenResult->token->expires_at
        //             )->toDateTimeString()
        //         ], 201);

        //     }else{
        //         return response()->json([
        //             'success' => 0,
        //             'message' => 'Unsucceflly save token'
        //         ], 200);
        //     }

        // Step 4 : Mise a jour des coockies
        return $this->setCredentialsCoockies($request);
    }
}
