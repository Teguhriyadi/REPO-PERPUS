<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = "rak";

    protected $guarded = [''];

    public $timestamps = false;

    public function buku()
    {
    	return $this->hasMany("App\Model\Buku", "id_rak", "id");
    }
}
