<?php

use App\Http\Controllers\Backend\vendorController;
use Illuminate\Support\Facades\Route;

//Vendor Route

Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashbaord');
