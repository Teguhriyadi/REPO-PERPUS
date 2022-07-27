<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";

    protected $guarded = [''];

    public $timestamps = false;

    public function anggota()
    {
    	return $this->hasMany("App\Model\Anggota", "id_prodi", "id");
    }
}
