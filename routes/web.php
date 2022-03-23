<?php

use App\Models\Post;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ViewPostController;

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\RegisSiswaIzinController;
use App\Models\Perizinan;
use App\Models\RegisSiswaIzin;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/', function () {
    return view('index',[
        'title' => 'Home',
        'first_post' => Post::orderBy('created_at','desc')->first(),
        "post" => Post::orderBy('created_at', 'desc')->skip(1)->take(2)->get(),
    ]);
});

Route::resource('/tentang/profil', ProfilController::class);
Route::get('/tentang/layanan', [LayananController::class,'index']);
Route::get('/tentang/fasilitas', [FasilitasController::class,'index']);

Route::get('/kegiatan/ekskul',[EkskulController::class,'index']);

Route::get('/post', [ViewPostController::class,'all']);
Route::get('/post/{slug}', [ViewPostController::class,'post']);


Route::resource('/faq', FaqController::class);

Route::resource('/kontak', KontakController::class);


Route::get('/perizinan',[PerizinanController::class,'view_perizinan']);
Route::get('/perizinan/{slug}',[PerizinanController::class,'detail_perizinan']);

// ------------------------------------------ admin ------------------------------------------------ //


Route::get('/admin', [LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/logout', [LoginController::class,'logout'])->middleware('auth');

Route::get('/admin/post/check_slug', [PostController::class, 'check_slug'])->middleware('auth');
Route::resource('/admin/post', PostController::class)->middleware('author');

Route::resource('/admin/user', UserController::class)->middleware('admin');
Route::resource('/admin/author', AuthorController::class)->middleware('admin');


Route::get('/admin/perizinan/check_slug', [PerizinanController::class, 'check_slug'])->middleware('pembina');
Route::get('/admin/perizinan/histori', [PerizinanController::class, 'histori_perizinan'])->middleware('pembina');
Route::get('/admin/perizinan/view_import', [PerizinanController::class, 'view_import'])->middleware('pembina');
Route::post('/admin/perizinan/import', [PerizinanController::class, 'import'])->middleware('pembina');
Route::get('/admin/perizinan/registrasi_siswa', [PerizinanController::class, 'registrasi_siswa'])->middleware('pembina');
Route::get('/admin/perizinan/create_izin/{slug}', [PerizinanController::class, 'create_izin'])->middleware('pembina');
Route::resource('/admin/perizinan', PerizinanController::class)->middleware('pembina');


Route::get('/admin/perizinan_siswa/view_import', [RegisSiswaIzinController::class, 'view_import'])->middleware('pembina');
Route::post('/admin/perizinan_siswa/import', [RegisSiswaIzinController::class, 'import'])->middleware('pembina');
Route::get('/admin/perizinan_siswa/check_slug', [RegisSiswaIzinController::class, 'check_slug'])->middleware('pembina');
Route::resource('/admin/perizinan_siswa', RegisSiswaIzinController::class)->middleware('pembina');