<?php

use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class, 'index'])->name('admin.index');


Route::get('/admin/client',[DashboardController::class, 'client'])->name('admin.client');
Route::post('/admin/client',[DashboardController::class, 'create'])->name('client.create');
// Edit client data
Route::get('admin/edit/{id}',[DashboardController::class, 'edit'])->name('edit.client');
Route::put('admin/update/{id}',[DashboardController::class, 'update'])->name('update.client');

//Delete client data
Route::delete('admin/delete/{id}',[DashboardController::class, 'delete'])->name('client.delete');



//frontend starts
Route::get('home',[HomeController::class, 'index'])->name('home.index');
