<?php
use App\Http\Livewire\Student;
use App\Http\Livewire\Images;
use App\Http\Livewire\Uploads;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('student', Student::class);
Route::get('uploads', Uploads::class);
Route::get('imgs', Images::class);
