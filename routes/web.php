<?php

use App\Http\Controllers\Setting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\LihatController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\RaporController;
use App\Http\Controllers\QrguruController;
use App\Http\Controllers\QrmuridController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\QrkepalaController;
use App\Http\Controllers\TypeFormController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('webprofil.index');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------login ------------------------------//
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('change/password', 'changePassword')->name('change/password');
});

// ----------------------------- register -------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register','storeUser')->name('register');    
});

// -------------------------- Home dashboard ----------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->middleware('auth')->name('home');
    Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
    Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
    Route::get('student/dashboard', 'studentDashboardIndex')->middleware('auth')->name('student/dashboard');
});

// ----------------------------- usermanagement -------------------------//
Route::controller(UserManagementController::class)->group(function () {
    Route::get('list/users', 'index')->middleware('auth')->name('list/users');
    Route::post('change/password', 'changePassword')->name('change/password');
    Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
    //
    Route::get('user/add/page', 'userAdd')->middleware('auth')->name('user/add/page');
    Route::post('user/update', 'userUpdate')->name('user/update');
    Route::post('user/delete', 'userDelete')->name('user/delete');

});

// ------------------------ setting -------------------------------//
Route::controller(Setting::class)->group(function () {
    Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
});

// ------------------------ student -------------------------------//
Route::controller(StudentController::class)->group(function () {
    Route::get('student/list', 'student')->middleware('auth')->name('student/list'); // list student
    Route::get('student/grid', 'studentGrid')->middleware('auth')->name('student/grid'); // grid student
    Route::get('student/add/page', 'studentAdd')->middleware('auth')->name('student/add/page'); // page student
    Route::post('student/add/save', 'studentSave')->name('student/add/save'); // save record student
    Route::get('student/edit/{id}', 'studentEdit'); // view for edit
    Route::post('student/update', 'studentUpdate')->name('student/update'); // update record student
    Route::post('student/delete', 'studentDelete')->name('student/delete'); // delete record student
    Route::get('student/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('student/search', 'studentSearch')->middleware('auth');

});

// ------------------------ nilai -------------------------------//
Route::controller(NilaiController::class)->group(function () {
    Route::get('studentnilai/list', 'student')->middleware('auth')->name('studentnilai/list'); // list student
    Route::get('studentnilai/grid', 'studentGrid')->middleware('auth')->name('studentnilai/grid'); // grid student
    Route::get('studentnilai/add/page', 'studentAdd')->middleware('auth')->name('studentnilai/add/page'); // page student
    Route::post('studentnilai/add/save', 'studentSave')->name('studentnilai/add/save'); // save record student
    Route::get('studentnilai/edit/{id}', 'studentEdit'); // view for edit
    Route::post('studentnilai/update', 'studentUpdate')->name('studentnilai/update'); // update record student
    Route::post('studentnilai/delete', 'studentDelete')->name('studentnilai/delete'); // delete record student
    Route::get('studentnilai/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('studentnilai/search', 'studentSearch')->middleware('auth');

});

// ------------------------ rapor -------------------------------//
Route::controller(RaporController::class)->group(function () {
    Route::get('studentrapor/list', 'student')->middleware('auth')->name('studentrapor/list'); // list student
    Route::get('studentrapor/grid', 'studentGrid')->middleware('auth')->name('studentrapor/grid'); // grid student
    Route::get('studentrapor/add/page', 'studentAdd')->middleware('auth')->name('studentrapor/add/page'); // page student
    Route::post('studentrapor/add/save', 'studentSave')->name('studentrapor/add/save'); // save record student
    Route::get('studentrapor/edit/{id}', 'studentEdit'); // view for edit
    Route::post('studentrapor/update', 'studentUpdate')->name('studentrapor/update'); // update record student
    Route::post('studentrapor/delete', 'studentDelete')->name('studentrapor/delete'); // delete record student
    Route::get('studentrapor/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('studentrapor/search', 'studentSearch')->middleware('auth');
});

// ------------------------ cetak -------------------------------//
Route::controller(CetakController::class)->group(function () {
    Route::get('studentcetak/list', 'student')->middleware('auth')->name('studentcetak/list'); // list student
    Route::get('studentcetak/grid', 'studentGrid')->middleware('auth')->name('studentcetak/grid'); // grid student
    Route::get('studentcetak/add/page', 'studentAdd')->middleware('auth')->name('studentcetak/add/page'); // page student
    Route::post('studentcetak/add/save', 'studentSave')->name('studentcetak/add/save'); // save record student
    Route::get('studentcetak/edit/{id}', 'studentEdit'); // view for edit
    Route::get('studentcetak/rapor/{no_induk}-{nm_anak}', 'studentPDF'); // view for edit
    Route::post('studentcetak/update', 'studentUpdate')->name('studentcetak/update'); // update record student
    Route::post('studentcetak/delete', 'studentDelete')->name('studentcetak/delete'); // delete record student
    Route::get('studentcetak/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('studentcetak/search', 'studentSearch')->middleware('auth');
});

// ------------------------ lihat -------------------------------//
Route::controller(LihatController::class)->group(function () {
    Route::get('studentlihat/list', 'student')->middleware('auth')->name('studentlihat/list'); // list student
    Route::get('studentlihat/grid', 'studentGrid')->middleware('auth')->name('studentlihat/grid'); // grid student
    Route::get('studentlihat/add/page', 'studentAdd')->middleware('auth')->name('studentlihat/add/page'); // page student
    Route::post('studentlihat/add/save', 'studentSave')->name('studentlihat/add/save'); // save record student
    Route::get('studentlihat/edit/{id}', 'studentEdit'); // view for edit
    Route::get('studentlihat/rapor/{no_induk}-{nm_anak}', 'studentPDF'); // view for edit
    Route::post('studentlihat/update', 'studentUpdate')->name('studentlihat/update'); // update record student
    Route::post('studentlihat/delete', 'studentDelete')->name('studentlihat/delete'); // delete record student
    Route::get('studentlihat/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('studentlihat/search', 'studentSearch')->middleware('auth');
});

// ------------------------ konfirmasi orang tua-------------------------------//
Route::controller(KonfirmasiController::class)->group(function () {
    Route::get('studentkonfirmasi/list', 'student')->middleware('auth')->name('studentkonfirmasi/list'); // list student
    Route::get('studentkonfirmasi/grid', 'studentGrid')->middleware('auth')->name('studentkonfirmasi/grid'); // grid student
    Route::get('studentkonfirmasi/add/page', 'studentAdd')->middleware('auth')->name('studentkonfirmasi/add/page'); // page student
    Route::post('studentkonfirmasi/add/save', 'studentSave')->name('studentkonfirmasi/add/save'); // save record student
    Route::get('studentkonfirmasi/edit/{id}', 'studentEdit'); // view for edit
    Route::get('studentkonfirmasi/rapor/{no_induk}-{nm_anak}', 'studentPDF'); // view for edit
    Route::post('studentkonfirmasi/update', 'studentUpdate')->name('studentkonfirmasi/update'); // update record student
    Route::post('studentkonfirmasi/delete', 'studentDelete')->name('studentkonfirmasi/delete'); // delete record student
    Route::get('studentkonfirmasi/profile/{id}', 'studentProfile')->middleware('auth'); // profile student
    Route::post('studentkonfirmasi/search', 'studentSearch')->middleware('auth');
});

// ------------------------ qr_murid -------------------------------//
Route::controller(QrmuridController::class)->group(function () {
    Route::get('/qr/murid/{no_induk}-{nm_anak}', 'qrMurid')->middleware('auth'); //scanqr
});


// ------------------------ qr_guru -------------------------------//
Route::controller(QrguruController::class)->group(function () {
    Route::get('/qr/guru/{name}/{pengesahan_id}', 'qrGuru'); //scanqr
    Route::get('studentkonfirmasiguru/', 'konfirmasiguru')->middleware('auth')->name('studentkonfirmasiguru/list'); // list student
    Route::post('studentkonfirmasiguru/update', 'guruUpdate')->name('studentkonfirmasiguru/update'); // update record student
    Route::post('studentkonfirmasiguru_dua/update', 'guruduaUpdate')->name('studentkonfirmasiguru_dua/update'); // update record student
    
    Route::post('reset/update', 'resetUpdate')->name('reset/update'); // update record student
    Route::post('resetdua/update', 'resetduaUpdate')->name('resetdua/update'); // update record student
});

// ------------------------ qr_kepalasekolah -------------------------------//
Route::controller(QrkepalaController::class)->group(function () {
    Route::get('/qr/kepala/{name}/{pengesahan_id}', 'qrKepala'); //scanqr
    Route::get('studentmurid/tk_a', 'student_a')->middleware('auth')->name('studentmurid/tk_a'); // list studentmurid
    Route::get('studentmurid/grid_a', 'studentGrid_a')->middleware('auth')->name('studentmurid/grid_a'); // grid students
    Route::get('studentmurid/tk_b', 'student_b')->middleware('auth')->name('studentmurid/tk_b'); // list studentmurid
    Route::get('studentmurid/grid_b', 'studentGrid_b')->middleware('auth')->name('studentmurid/grid_b'); // grid students
    Route::get('studentkonfirmasikepala/', 'konfirmasikepala')->middleware('auth')->name('studentkonfirmasikepala/list'); // list student
    Route::post('studentkonfirmasikepala/update', 'kepalaUpdate')->name('studentkonfirmasikepala/update'); // update record student
    Route::post('studentkonfirmasikepala_dua/update', 'kepaladuaUpdate')->name('studentkonfirmasikepala_dua/update'); // update record student
});


