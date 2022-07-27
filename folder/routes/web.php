<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => ["guest"]], function() {
	Route::get("/", "AppController@login");
	Route::get("/template","AppController@template");
	Route::get("/login", "AppController@login");
	Route::post("/login","AppController@post_login");
	Route::get("/reset_password", "UserController@reset_password");
	Route::post("/put_password_new", "UserController@put_password_new");
});

Route::group(["middleware"=>["admin"]], function(){
	Route::get("/dashboard","AppController@dashboard");

	// Data Kategori
	Route::get("/kategori", "KategoriController@data_kategori");
	Route::post("/kategori", "KategoriController@post_kategori");
	Route::get("/kategori/{id}", "KategoriController@edit_kategori");
	Route::put("/kategori", "KategoriController@put_kategori");
	Route::get("/hapus_kategori/{id}", "KategoriController@hapus_kategori");

	// Data Rak
	Route::get("/rak", "RakController@data_rak");
	Route::post("/rak", "RakController@post_rak");
	Route::get("/rak/{id}", "RakController@edit_rak");
	Route::put("/rak", "RakController@put_rak");
	Route::get("/hapus_data_rak/{id}", "RakController@hapus_rak");

	// Data Prodi
	Route::get("/prodi", "ProdiController@data_prodi");
	Route::post("/prodi", "ProdiController@post_prodi");
	Route::get("/prodi/{id}", "ProdiController@edit_prodi");
	Route::put("/prodi", "ProdiController@put_prodi");
	Route::get("/hapus_prodi/{id}", "ProdiController@hapus_prodi");
	// Data Anggota
	Route::get("/anggota", "AnggotaController@data_anggota");
	Route::post("/anggota", "AnggotaController@post_anggota");
	Route::get("/edit_anggota", "AnggotaController@edit_anggota");
	Route::put("/anggota", "AnggotaController@put_anggota");
	Route::get("/hapus_anggota/{id}", "AnggotaController@hapus_anggota");

	// Data Buku
	Route::get("/buku", "BukuController@data_buku");
	Route::post("/buku", "BukuController@post_buku");
	Route::get("/edit_buku", "BukuController@edit_buku");
	Route::put("/buku", "BukuController@put_buku");
	Route::get("/hapus_data_buku/{id}", "BukuController@hapus_buku");

	// Data Peminjaman
	Route::get("/pinjam", "PinjamController@data_peminjaman");
	Route::post("/pinjam", "PinjamController@post_peminjaman");
	Route::get("/edit_peminjaman", "PinjamController@edit_peminjaman");
	Route::put("/pinjam", "PinjamController@put_peminjaman");
	Route::get("/hapus_peminjaman/{id}", "PinjamController@hapus_peminjaman");
	Route::get("/detail_peminjaman/{id}", "PinjamController@detail_peminjaman");

	// Data Pengembalian
	Route::get("/pengembalian", "PengembalianController@data_pengembalian");
	Route::get("/detail_pengembalian", "PengembalianController@detail_pengembalian");
	Route::get("/pengembalian_buku/{id}", "PengembalianController@pengembalian_buku");
	Route::put("/pengembalian_buku", "PengembalianController@put_pengembalian_buku");

	// Data Laporan
	Route::get("/laporan", "LaporanController@laporan");
	Route::get("/laporan_perhari", "LaporanController@laporan_perhari");
	// Data Users
	Route::get("/users", "UserController@data_user");
	Route::post("/users", "UserController@post_users");
	Route::get("/ganti_password", "UserController@ganti_password");
	Route::put("/put_password", "UserController@put_password");
	Route::put("/users", "UserController@put_users");
	Route::get("/hapus_users/{id}", "UserController@hapus_users");

	Route::get("/help", "AppController@help");

	Route::get("/logout", "UserController@logout");
});