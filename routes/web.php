<?php

use App\Http\Controllers\dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class, 'index'])->name('admin.index');


Route::get('/admin/client',[DashboardController::class, 'client'])->name('admin.client');
Route::post('/admin/client',[DashboardController::class, 'create'])->name('client.create');
// Edit client data
Route::get('admin/edit/{id}',[DashboardController::class, 'edit'])->name('edit.client');
// Route::put('admin/{$id}/update',[DashboardController::class, 'update'])->name('update.client');
