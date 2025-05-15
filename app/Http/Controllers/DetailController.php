<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        // Di sini bisa pakai model jika dinamis
        return view('pages.pembeli.detail');
    }
}
