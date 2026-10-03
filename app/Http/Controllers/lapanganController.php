<?php

namespace App\Http\Controllers;

use App\Models\lapangan;
use Illuminate\Http\Request;

class lapanganController extends Controller
{
    public function getLapangan() {

        $lapangan = Lapangan::getLapangan();

        return view('landing', [
            'lapangan' => $lapangan
        ]);
    }
}
