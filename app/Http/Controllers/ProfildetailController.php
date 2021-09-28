<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Profil;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ANoteController;
use App\Http\Controllers\AUserController;

class ProfildetailController extends Controller
{
    //
    public function profildetail() {

        /** @var User $user */
        $user = Auth::user();


        $notes = $user->notes;




        return view('profildetail', compact('notes'));
    }
}
