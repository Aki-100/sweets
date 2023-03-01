<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SweetController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PrefectureController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/sweets', [SweetController::class, 'index'])->name('index');
//SweetControllerの'index'メソッドを使用
//indexという名前付きルートを設定

Route::get('/sweets/create', [SweetController::class, 'create'])->name('create');
//SweetControllerの'create'メソッドを使用
//createという名前付きルートを設定

Route::post('/sweets', [SweetController::class, 'store'])->name('store');
//SweetControllerの'store'メソッドを使用した保存処理
//storeという名前付きルートを設定

Route::get('/sweets/{sweet}', [SweetController::class ,'show'])->name('show');
//'/sweets/{対象のデータID}'にGetリクエストが来たら、SweetControllerのshowメソッドを実行
//showという名前付きルートを設定

Route::get('/sweets/{sweet}/edit', [SweetController::class, 'edit']);
//'/sweets/{対象のデータID}/edit'にGetリクエストが来たら、SweetControllerのeditメソッドを実行

Route::put('/sweets/{sweet}', [SweetController::class, 'update']);
//'/sweets/{対象のデータID}'にPutリクエストが来たら、SweetControllerのupdateメソッドを実行

Route::delete('/sweets/{sweet}', [SweetController::class, 'delete']);
//'/sweets/{対象のデータID}'にDeleteリクエストが来たら、SweetControllerのdeleteメソッドを実行

Route::get('/regions/{region}', [RegionController::class,'index']);
//'/regions/{対象のデータID}'にGetリクエストが来たら、RegionControllerのindexメソッドを実行

Route::get('/prefectures/{prefecture}', [PrefectureController::class,'index']);
//'/prefectures/{対象のデータID}'にGetリクエストが来たら、PrefectureControllerのindexメソッドを実行