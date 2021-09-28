<?php

namespace App\Http\Controllers;
use App\Models\Note;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ANoteController;

class ProfilController extends Controller
{
    public function profil() {

        /** @var User $user */
        $user = Auth::user();

        $notes = $user->notes;


        return view('profil', compact('notes'));
    }
}
