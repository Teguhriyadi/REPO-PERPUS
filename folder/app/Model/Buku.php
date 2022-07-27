<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
	
	protected $table ="buku";
	
	protected $guarded =[''];

	public $timestamps = false;

	public function data_rak()
	{
		return $this->belongsTo("App\Model\Rak", "id_rak", "id");
	}

	public function data_kategori()
	{
		return $this->belongsTo("App\Model\Kategori", "id_kategori", "id");
	}

	public function pinjam()
	{
		return $this->hasMany("App\Model\Pinjam", "kode_buku", "kode");
	}
}
 