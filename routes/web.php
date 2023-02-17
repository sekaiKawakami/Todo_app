<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TaskController;

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
    return view('index');
    // return view('welcome');
});

Route::resource('tasks', TaskController::class);
//↑これ一本で下のコード群が不要になる
//一覧表示
// Route::get('list', [TodoListController::class, 'index']);
//タスク追加
// Route::post('/create', [TaskController::class, 'create']);
//タスク更新
// Route::post('/edit', [TaskController::class, 'edit']);
//タスク削除
// Route::post('/delete', [TaskController::class, 'delete']);