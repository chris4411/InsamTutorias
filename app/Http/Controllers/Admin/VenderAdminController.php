<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

use App\Models\Vendeur;
use App\Models\User;

class VenderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view_data = ['vendeurs'=> Vendeur::with(['user'])->get()];
        return view('admin.vendeur.index', ['data'=>$view_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vendeur.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Step 1 : validation des donnees recuperees
        $request->validate([
            'password' => 'required|confirmed|min:8',
            'email' => 'required|unique:users|max:100',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
        ]);


        // Step 2 :  Formatage des donnees avant insertion
        $user_data = [
            'first_name' => $request->first_name,
            'last_name' =>$request->last_name,
            'email' =>$request->email,
            'password' =>$request->password,
        ];

        // Step 3 : Traitement de l'image

        if($request->image == NULL){
            $user_data['image'] = 'user.png';
        }else{
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = 'avatar-'.time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/images/profile'), $imageName);
            $user_data['image'] = $imageName;
        }

        // // Step 4 : Creation du user associe afin de le lier a notre vendeur en recuperatn son id
        $user = User::create($user_data);

        // // Step 5 : creation du vendeur concerne
        $vendeur_data =  new Vendeur;
        $vendeur_data->status = $request->status;
        $vendeur_created = $user->client()->save($vendeur_data);

        // Step 6 : Recuperatoin de la nouvelle liste des vendeurs
        $vendeurs =  User::join('vendeurs', 'users.id', '=', 'vendeurs.user_id')->get();
        Session::put('success', 'Vendeur cree avec success.');
        $view_data = ['vendeurs'=> $vendeurs];
        return view('admin.vendeur.index', ['data'=>$view_data]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $vendeur = Vendeur::with(['user'])->where('vendeurs.id', $id)->first();
       return view('admin.vendeur.show', compact('vendeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendeur = Vendeur::with(['user'])->where('vendeurs.id', $id)->first();
        return view('admin.vendeur.edit', compact('vendeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        // Step 2 :  Formatage des donnees avant insertion
        $user_data = [];
        if($request->first_name) $user_data['first_name'] = $request->first_name;
        if($request->last_name) $user_data['last_name'] = $request->last_name;

        if($request->password) {
            $request->validate(['password' => 'required|confirmed|min:8']);
            $user_data['password'] = $request->password;
        }
        if($request->image != NULL){
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = 'avatar-'.time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/images/profile'), $imageName);
            $user_data['image'] = $imageName;
        }


        // Step 3 : recuperation du user
        $user = User::find($request->user_id);

        // Step 4 : Mise a jour du user
        if($user->update($user_data)){

            // Step 5 : Recuperation du vendeur
            $vendeur = Vendeur::find($request->id);

            // Step 6 : Formatage des donnees du vendeur
            $vendeur_data = [
                'status' => $request->status
            ];

            // Step 7 : Mise a jour du vendeur recupere
            if($vendeur->update($vendeur_data)){

                // Step 8 : Derniere Etape on recupere de nouveau la liste des vendeur et back sur la liste
                $vendeurs =  User::join('vendeurs', 'users.id', '=', 'vendeurs.user_id')->get();
                $view_data = ['vendeurs'=> $vendeurs];
                Session::put('success', 'Vendeur modifie avec success.');
                return view('admin.vendeur.index', ['data'=>$view_data]);
            }

        }

        return $user->update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Step 1 : Recupearation du vendeur
        $vendeur = Vendeur::find($id);

        // Step 2 : Recuperation du user
        $user = User::find($vendeur->user_id);

        // Step 3 :  Suppressoin du user
        $user->delete();

        // Step 4 : Derniere Etape on recupere de nouveau la liste des vendeur et back sur la liste
        $vendeurs =  User::join('vendeurs', 'users.id', '=', 'vendeurs.user_id')->get();
        $view_data = ['vendeurs'=> $vendeurs];
        Session::put('success', 'Vendeur supprime avec success.');
        return view('admin.vendeur.index', ['data'=>$view_data]);

    }
}
