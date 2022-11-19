<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('/kasir', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('master.admin');
});
Route::get('/user', function () {
    return view('master.user');
});

Route::get('/pengumuman', function () {
    return view('master.pengumuman');
});

Route::get('/profile_admin', function () {
    return view('master.AdminProfile');
});

Route::get('/profile_user', function () {
    return view('master.UserProfile');
});

Route::get('/test', function () {
    return view('kasir.Nota');
});

//Master
Route::get('/master', function () {
    return view('master.index');
});
// Akhir Master

//Peternak
Route::group(['middleware' => ['auth','CekLevel:kasir']],function(){
    Route::get('/kasir', function () {
    return view('index');});
});

Route::get('/kasir', 'KasirController@index')->name('Kasir.index');
// input data ayam masuk
//Route::get('/laporan_masuk', 'PendataanKendaraanController@index')->name('PendataanKendaraan.index');
Route::get('/pendataan_kendaraan', 'PendataanKendaraanController@index')->name('PendataanKendaraan.index2');
Route::get('/pendataan_kendaraan/create', 'PendataanKendaraanController@create')->name('PendataanKendaraan.create');
Route::post('/pendataan_kendaraan', 'PendataanKendaraanController@store')->name('PendataanKendaraan.store');

// transaksi penyewaan
Route::get('/transaksi_penyewaan', 'TransaksiPenyewaanController@index')->name('TransaksiPenyewaan.index');
Route::get('/transaksi_penyewaan/create', 'TransaksiPenyewaanController@create')->name('TransaksiPenyewaan.create');
Route::post('/transaksi_penyewaan', 'TransaksiPenyewaanController@store')->name('TransaksiPenyewaan.store');
Route::get('/transaksi_penyewaan/{transaksi_penyewaan}', 'TransaksiPenyewaanController@store')->name('TransaksiPenyewaan.show');
Route::get('/transaksi_penyewaan/post-cetak', 'TransaksiPenyewaanController@cetak')->name('cetak');

// transaksi penyewaan
Route::get('/member', 'MemberController@index')->name('Member.index');
Route::get('/member/create', 'MemberController@create')->name('Member.create');
Route::post('/member', 'MemberController@store')->name('Member.store');

// pendataan pengembalian
Route::get('/pengembalian', 'PengembalianController@index')->name('Pengembalian.index');
Route::get('/pengembalian/create', 'PengembalianController@create')->name('Pengembalian.create');
Route::post('/pengembalian', 'PengembalianController@store')->name('Pengembalian.store');


// informasi kerugian
Route::get('/kerugian', 'KerugianController@index')->name('Kerugian.index');
Route::get('/kerugian/create', 'KerugianController@create')->name('Kerugian.create');
Route::post('/kerugian', 'KerugianController@store')->name('Kerugian.store');

// informasi pakan
Route::get('/datapengeluaran', 'DataPengeluaranController@index')->name('DataPengeluaran.index');
Route::get('/datapengeluaran/create', 'DataPengeluaranController@create')->name('DataPengeluaran.create');
Route::post('/datapengeluaran', 'DataPengeluaranController@store')->name('DataPengeluaran.store');

// Monitoring Ayam
Route::get('/laporan', 'LaporanController@index')->name('Laporan.index');
Route::get('/laporan/create', 'LaporanController@create')->name('Laporan.create');
Route::post('/laporan', 'LaporanController@store')->name('Laporan.store');
Route::get('/laporan/post-cetak', 'LaporanController@cetak')->name('cetak');

Route::get('/kondisi_kandang', function () {
    return view('kasir.Kandang');
});

Route::get('/kondisi_kandang2', 'KandangController@index')->name('Kandang.index');

// Register Peternak
Route::get('/register_k', 'RegisterKasirController@index')->name('register.index');
Route::get('/register_kasir/create', 'RegisterKasirController@create')->name('register.create');
Route::post('/register_kasir', 'RegisterKasirController@store')->name('register.store');

//db user
Route::get('/user', 'UserController@index')->name('User.index');

Route::get('/pesan_kritik_saran_kasir', function () {
    return view('kasir.pesankritiksaran');
});

Route::get('/monitoring_stock_nutrisi_kasir', function () {
    return view('kasir.monitoringstocknutrisi');
});
//Akhir Peternak

// Bendahara
Route::get('/bendahara', function () {
    return view('bendahara.index');
});
Route::get('/kasir', 'KasirController@index')->name('Kasir.index');
// Akhir Bendahara

Auth::routes();

// Owner
Route::get('/register_kasir', function () {
    return view('owner.register');
});
Route::get('/laporan_masuk', 'AyamMasukController@index')->name('AyamMasuk.show');

Route::get('/owner', function () {
    return view('owner.index');
});

Route::get('/laporan_masuk', function () {
    return view('owner.Laporanmasuk');
});

Route::get('/monitoring_pemberian_pakan_ayam', function () {
    return view('owner.monitoringpemberianpakan');
});

Route::get('/monitoring_pembelian_pakan_ayam', function () {
    return view('owner.monitoringpembelianpakan');
});

Route::get('/monitoring_pemberian_obat_ayam', function () {
    return view('owner.monitoringpemberianobat');
});

Route::get('/monitoring_pembelian_obat_ayam', function () {
    return view('owner.monitoringpembelianobat');
});

Route::get('/monitoring_kualitas_ayam', function () {
    return view('owner.monitoringkualitasayam');
});

Route::get('/monitoring_stock_nutrisi', function () {
    return view('owner.monitoringstocknutrisi');
});

Route::get('/monitoring_user', function () {
    return view('owner.monitoringuser');
});

Route::get('/pesan_kritik_saran_owner', function () {
    return view('owner.pesankritiksaran');
});
// Akhir Owner


/*
Route::get('/pert6', 'MahasiswaController@index')->name('pert6.index');

//route untuk proses menambah data
Route::get('/pert6/create', 'MahasiswaController@create')->name('pert6.create');
Route::post('/pert6', 'MahasiswaController@store')->name('pert6.store');

//route untuk proses update
Route::get('/pert6/{mahasiswa}', 'MahasiswaController@show')->name('pert6.show');
Route::get('/pert6/{mahasiswa}/edit', 'MahasiswaController@edit')->name('pert6.edit');
Route::put('/pert6/{mahasiswa}', 'MahasiswaController@update')->name('pert6.update');

//route untuk proses delete
Route::delete('/pert6/{mahasiswa}','MahasiswaController@delete')->name('pert6.delete');
*/



Route::get('/', [LandingController::class, 'login'])->name('login');
Route::post('post-login', [LandingController::class, 'postLogin'])->name('login.post');
Route::get('registration', [LandingController::class, 'registration'])->name('register');
Route::post('post-registration', [LandingController::class, 'postRegistration'])->name('register.post');


?>
