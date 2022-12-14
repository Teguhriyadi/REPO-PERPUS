<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = "pinjam";

    protected $guarded = [''];

    public $timestamps = false;

    public function data_buku()
    {
    	return $this->belongsTo("App\Model\Buku", "kode_buku", "kode");
    }

    public function data_anggota()
    {
    	return $this->belongsTo("App\Model\Anggota", "id_anggota", "id");
    }
}
