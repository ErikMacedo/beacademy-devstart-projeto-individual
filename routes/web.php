<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ProductController,
  };
  require __DIR__.'/auth.php';

  Route::get('/', function(){
    return view('welcome');
  });

  Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
  Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
  Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

  Route::get('/create', [ProductController::class, 'create'])->name('product.create');
  Route::post('/product', [ProductController::class, 'store'])->name('product.store');
  Route::get('/', [ProductController::class, 'index'])->name('product.index');
  Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
