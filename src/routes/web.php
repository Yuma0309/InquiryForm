<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// お問い合わせ内容保存画面
Route::get('/inquiry', [ContactController::class, 'inquiry']);

// お問い合わせ内容保存処理
Route::post('/inquiry/store', [ContactController::class, 'store']);

// お問い合わせ内容一覧画面
Route::get('/index', [ContactController::class, 'index']);
