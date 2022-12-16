<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vendeur;

class VendeurController extends Controller
{
    
    public function update(Request $request, $id){
    $item=Vendeur::find($id);

    if ($item) {
        $result=$item->update($request->all());
        if($result){
            return response()->json([
                'sucess'=> true,
                'data'=> Vendeur::find($id),
                'message'=> 'vendor updated sucessfuly !',
            ]);
        }
    }
    return response()->json([
        'sucess'=>false,
        'data'=> [],
        'message'=> 'vendor failed to update !',
    ]);
}

public function delete($id)
{
    $item = Vendeur::find($id);

    if($item){
        $result = $item->delete();

        if($result){
            return response()->json([
                'success' => true,
                'message' => 'seller deleted successfully !',
            ]);
        }
    }
    return response()->json([
        'success' => false,
        'message' => 'seller failed to delete !',
    ]);
}

}
