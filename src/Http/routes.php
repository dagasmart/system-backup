<?php

use DagaSmart\SystemBackup\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('menu-backup', [Controllers\SystemBackupController::class, 'index']);
Route::post('menu-backup', [Controllers\SystemBackupController::class, 'addBackup']);
Route::put('menu-backup', [Controllers\SystemBackupController::class, 'recover']);
Route::delete('menu-backup', [Controllers\SystemBackupController::class, 'remove']);
