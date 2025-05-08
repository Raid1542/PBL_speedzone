<?php

namespace App\Http\Controllers\Pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditProfilController extends Controller
{
    public function edit_profil() {
        return view('pages.pembeli.edit_profil');
    }
}
