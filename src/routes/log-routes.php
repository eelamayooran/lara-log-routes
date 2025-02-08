<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

// Route for displaying the last 100 lines of the log
Route::get('/logs', function (Request $request) {
    $filePath = storage_path('logs/laravel.log');
    if (!File::exists($filePath)) {
        return response()->json(['logs' => []]);
    }

    $lines = array_slice(file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES), -100);
    return response()->json(['logs' => $lines]);
});

// Route for clearing the log file
Route::get('/clear-logs', function () {
    $logFile = storage_path('logs/laravel.log');
    if (file_exists($logFile)) {
        file_put_contents($logFile, ''); // Clears the log file
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false], 400);
});
