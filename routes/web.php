<?php

use App\Http\Controllers\Dashboardcontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Myfirstcontroller;
use App\Http\Controllers\Mastercontroller;
use App\Http\Controllers\Perkuliahancontroller;
use App\Http\Controllers\SatuanController;

Route::get('/hello', function () {
    echo 'Hello, World!';
});

Route::get('/hellodaricontroller', [Myfirstcontroller::class, 'helloworld']);
Route::get('/dengan/parameter/{id}', [Myfirstcontroller::class, 'withparam']);
Route::get('/myview', [Myfirstcontroller::class, 'showmyview']);
Route::get('/viewwithdata', [Myfirstcontroller::class, 'viewwithdata']);
Route::get('/blank', [Myfirstcontroller::class, 'blank']);


Route::get('/admin', [Dashboardcontroller::class, 'index']);

Route::get('/mastermhs', [Mastercontroller::class, 'mastermahasiswa']);
Route::post('/submitmhs', [Mastercontroller::class, 'submitMahasiswa']);
Route::get('/editmhs/{idmhs}', [Mastercontroller::class, 'updatemahasiswa']);
Route::post('/submiteditmhs', [Mastercontroller::class, 'submit_editmhs']);
Route::get('/hapusmhs/{idmhs}', [Mastercontroller::class, 'hapusmahasiswa']);

Route::get('/masterkls', [Mastercontroller::class, 'masterkelas']);
Route::post('/submitkls', [Mastercontroller::class, 'submitKelas']);
Route::get('/editkls/{idkelas}', [Mastercontroller::class, 'updatekelas']);
Route::post('/submiteditkls', [Mastercontroller::class, 'submit_editkls']);
Route::get('/hapuskls/{idkelas}', [Mastercontroller::class, 'hapuskelas']);

Route::get('/mastermk', [Mastercontroller::class, 'mastermk']);
Route::get('/masterdsn', [Mastercontroller::class, 'masterdosen']);



Route::get('/jadwalkuliah', [Perkuliahancontroller::class, 'jadwalkuliah']);
Route::get('/jadwalujian', [Perkuliahancontroller::class, 'jadwalujian']);
Route::get('/absenmhs', [Perkuliahancontroller::class, 'absenmahasiswa']);
Route::get('/nilaimhs', [Perkuliahancontroller::class, 'nilaimahasiswa']);

Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan');
Route::get('/satuan/create', [SatuanController::class, 'create'])->name('satuan.create');
Route::post('/satuan', [SatuanController::class, 'store'])->name('satuan.store');
Route::get('/satuan/{satuan}/edit', [SatuanController::class, 'edit'])->name('satuan.edit');
Route::put('/satuan/{satuan}', [SatuanController::class, 'update'])->name('satuan.update');
Route::delete('/satuan/{satuan}', [SatuanController::class, 'destroy'])->name('satuan.destroy');



