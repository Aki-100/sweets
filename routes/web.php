<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SweetController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\CommentController;
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
    return view('top');
})->name('top');

Route::get('/home', [SweetController::class, 'ranking'])->middleware(['auth', 'verified'])->name('home');

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

Route::get('/sweets/{sweet}/edit', [SweetController::class, 'edit'])->name('edit');
//'/sweets/{対象のデータID}/edit'にGetリクエストが来たら、SweetControllerのeditメソッドを実行
//editという名前付きルートを設定

Route::put('/sweets/{sweet}', [SweetController::class, 'update'])->name('update');
//'/sweets/{対象のデータID}'にPutリクエストが来たら、SweetControllerのupdateメソッドを実行
//updateという名前付きルートを設定

Route::delete('/sweets/{sweet}', [SweetController::class, 'delete'])->name('delete');
//'/sweets/{対象のデータID}'にDeleteリクエストが来たら、SweetControllerのdeleteメソッドを実行
//deleteという名前付きルートを設定

Route::get('/like/{sweet}', [LikeController::class,'like'])->name('likes');
//'/like/{対象のデータID}'にGetリクエストが来たら、LikeControllerのstoreメソッドを実行
//likesという名前付きルートを設定

Route::get('/unlike/{sweet}', [LikeController::class, 'unlike'])->name('unlikes');
//'/unlike/{対象のデータID}'にGetリクエストが来たら、LikeControllerのdestroyメソッドを実行
//unlikesという名前付きルートを設定

Route::get('/regions/{region}', [RegionController::class,'index'])->name('region_index');
//'/regions/{対象のデータID}'にGetリクエストが来たら、RegionControllerのindexメソッドを実行

Route::get('/prefectures/{prefecture}', [PrefectureController::class,'index'])->name('prefecture_index');
//'/prefectures/{対象のデータID}'にGetリクエストが来たら、PrefectureControllerのindexメソッドを実行


Route::get('/comments', [CommentController::class,'index'])->name('comment_index');
//CommentControllerの'index0'メソッドを使用
//'comment_index0'という名前付きルートを設定

Route::get('/comments/create', [CommentController::class, 'create'])->name('comment_create');
//CommentControllerの'create'メソッドを使用
//'comment_create'という名前付きルートを設定

Route::post('/comments', [CommentController::class, 'store'])->name('comment_store');
//CommentControllerの'store'メソッドを使用した保存処理
//'comment_store'という名前付きルートを設定

Route::delete('/comments/{comment}', [CommentController::class,'delete']);
//'/comments/{対象のデータID}'にDeleteリクエストが来たら、CommentControllerのdeleteメソッドを実行


Route::get('/regions', [RegionController::class,'index0'])->name('region_index0');
//RegionControllerの'index0'メソッドを使用
//'region_index0'という名前付きルートを設定


Route::get('/prefectures', [PrefectureController::class,'index0'])->name('prefecture_index0');
//PrefectureControllerの'index0'メソッドを使用
//'prefecture_index0'という名前付きルートを設定
