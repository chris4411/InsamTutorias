<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Session;


class ClientAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $view_data = ['clients'=> Client::with(['user'])->get()];
        return view('admin.client.index',['data'=>$view_data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            // // Step 4 : Creation du user associe afin de le lier a notre client en recuperant son id
            $user = User::create($user_data);
            // // Step 5 : creation du client concerne
            $client_data =  new client;
            $client_data->status = $request->status;
            $client_created = $user->client()->save($client_data);

            // Step 6 : Recuperation de la nouvelle liste des clients
            $clients =  User::join('clients', 'users.id', '=', 'clients.user_id')->get();
            Session::put('success', 'client cree avec success.');
            $view_data = ['clients'=> $clients];
            return view('admin.client.index', ['data'=>$view_data]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // Step 1 : Recupearation du client
       $client = Client::with(['user'])->where('clients.id', $id)->first();
       return view('admin.client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $client = Client::with(['user'])->where('clients.id', $id)->first();
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

           // Step 5 : Recuperation du client
           $client = client::find($request->id);

           // Step 6 : Formatage des donnees du client
           $client_data = [
               'status' => $request->status
           ];

           // Step 7 : Mise a jour du client recupere
           if($client->update($client_data)){

               // Step 8 : Derniere Etape on recupere de nouveau la liste des client et back sur la liste
               $clients =  User::join('clients', 'users.id', '=', 'clients.user_id')->get();
               $view_data = ['clients'=> $clients];
               Session::put('success', 'client modifie avec success.');
               return view('admin.client.index', ['data'=>$view_data]);
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
        // Step 1 : Recupearation du client
        $client = Client::find($id);

        // Step 2 : Recuperation du user
        $user = User::find($client->user_id);

        // Step 3 :  Suppressoin du user
        $user->delete();

        // Step 4 : Derniere Etape on recupere de nouveau la liste des client et back sur la liste
        $clients =  User::join('clients', 'users.id', '=', 'clients.user_id')->get();
        $view_data = ['clients'=> $clients];
        Session::put('success', 'client supprime avec success.');
        return view('admin.client.index', ['data'=>$view_data]);
    }
}
