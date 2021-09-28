<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{// https://carbon.now.sh/
    public function getAll(){
        $data = Reclamation::get();
        return response()->json($data, 200);
      }

      public function create(Request $request){
        $data['user_id'] = $request['user_id'];
        $data['evaluation_id'] = $request['evaluation_id'];
        $data['motif'] = $request['motif'];
        Reclamation::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
      }

      public function delete($id){
        $res = Reclamation::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }

      public function get($id){
        $data = Reclamation::find($id);
        return response()->json($data, 200);
      }

      public function update(Request $request,$id){
        $data['user_id'] = $request['user_id'];
        $data['evaluation_id'] = $request['evaluation_id'];
        $data['motif'] = $request['motif'];
        Reclamation::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }
}
