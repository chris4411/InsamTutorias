<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Client::paginate(10);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Client::create($request->all());
        if($result){
            return response()->json([
                'success' => 1,
                'data' => $result,
                'message' => 'created successfully !',
            ]);
        }else{
            return response()->json([
                'success' => 0,
                'message' => 'failed to add !',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Client::find($id);

        if($result){
            return response()->json([
                'success' => 1,
                'data' => $result,
                'message' => 'item founded !',
            ]);
        }else{
            return response()->json([
                'success' => 0,
                'message' => 'item not found !',
            ]);
        }
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
        $item = Client::find($id);

        if($item){
            $result = $item->update($request->all());
            if($result){
                return response()->json([
                    'success' => 1,
                    'data' => Client::find($id),
                    'message' => 'item updated successfully !',
                ]);
            }
        }
        return response()->json([
            'success' => 0,
            'message' => 'item failed to update !',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Client::find($id);

        if($item){
            $result = $item->delete();

            if($result){
                return response()->json([
                    'success' => 1,
                    'message' => 'item deleted successfully !',
                ]);
            }
        }
        return response()->json([
            'success' => 0,
            'message' => 'item failed to delete !',
        ]);
    }
}
