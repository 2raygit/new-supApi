<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        if($request->image){
            if($ext=='png' || $ext=='jpg' || $ext=='jpeg' ){
                $data =file_get_contents($request->image);
                $base64 ='data:image/'.$ext.';base64'.base64_encode($data);
                return response()->json($base64);
            }
            return response()->json( 'images invalide');
        }
    }
}
