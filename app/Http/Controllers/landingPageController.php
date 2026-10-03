<?php

namespace App\Http\Controllers;

use App\Models\lapangan;

class landingPageController extends Controller
{
    public function index() {

        $lapangan = Lapangan::getLapangan();

        return view('landing', [
            'lapangan' => $lapangan
        ]);
    }
}
