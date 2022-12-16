<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compte;

class CompteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Compte::find($id);

        if($result){
            return response()->json([
                'success' => true,
                'data' => [$result],
                'message' => 'Account founded !',
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'Account not found !',
            ]);
        }
    }

    public function index()
    {
        return Compte::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Compte::create($request->all());
        if($result){
            return response()->json([
                'success' => true,
                'data' => $result,
                'message' => 'created successfully !',
            ]);
        }else{
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'failed to add !',
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
        $item = Compte::find($id);

        if($item){
            $result = $item->update($request->all());
            if($result){
                return response()->json([
                    'success' => true,
                    'data' => Compte::find($id),
                    'message' => 'Account updated successfully !',
                ]);
            }
        }
        return response()->json([
            'success' => false,
            'data' => [],
            'message' => 'Account failed to update !',
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
        $item = Compte::find($id);

        if($item){
            $result = $item->delete();

            if($result){
                return response()->json([
                    'success' => true,
                    'message' => 'Account deleted successfully !',
                ]);
            }
        }
        return response()->json([
            'success' => false,
            'message' => 'Account failed to delete !',
        ]);
    }
}
