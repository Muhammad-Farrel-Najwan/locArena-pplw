<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lapangan extends Model {
    protected $table = 'lapangan';

    public static function getLapangan() {
        return DB::select("select * from lapangan", []);
    }
}

