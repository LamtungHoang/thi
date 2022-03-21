<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/',[ProductController::class,'index'])->name('sale.index');

Route::get('{id}/delete',[ProductController::class,'destroy'])->name('sale.destroy');

Route::get("/create",[ProductController::class,"create"])->name("sale.create");

Route::post("/create",[ProductController::class,"store"])->name("sale.store");

Route::get("{id}/edit",[ProductController::class,"edit"])->name("sale.edit");

Route::post("{id}/edit",[ProductController::class,"update"])->name("sale.update");
