<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

    class Lapangan extends Model {
        protected $table = 'lapangan';

        public static function getLapangan() {
            return DB::select("select
            l.nama_lapangan as nama_lapangan,
            l.harga_per_jam as harga,
            initcap(jl.nama_lapangan) as jenis_lapangan,
            l.is_indoor as indoor,
            l.is_toilet as toilet,
            l.jenis_lantai as lantai,
            initcap(ke.nama_kecamatan) as kecamatan,
            initcap(ko.nama_kota) as kota
            from lapangan l
            join jenis_lapangan jl on l.id_jenis_lapangan = jl.id_jenis_lapangan
            join venue v on l.id_venue = v.id_venue
            join kecamatan ke on v.id_kecamatan = ke.id_kecamatan
            join kota ko on ke.id_kota = ko.id_kota", []);
        }
    }

