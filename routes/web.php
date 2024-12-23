<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\WaterBillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::post('/submit-contact', [ContactController::class, 'submitContact'])->name('contact.submit');

Route::get('bill/form', [BillController::class, 'showForm'])->name('bill.form');
Route::post('bill/preview', [BillController::class, 'preview'])->name('bill.preview');
Route::post('bill/download/{withWatermark?}', [BillController::class, 'download'])->name('bill.download');

Route::post('bill/send-email', [BillController::class, 'sendEmail'])->name('bill.sendEmail');;

Route::get('/water-bill-form', [WaterBillController::class, 'showForm'])->name('water.bill.form');
Route::post('/water-bill-preview', [WaterBillController::class, 'preview'])->name('water.bill.preview');
Route::get('/water-bill/preview', [WaterBillController::class, 'preview'])->name('water.bill.preview');
Route::get('/water-bill/download/{withWatermark}', [WaterBillController::class, 'download'])->name('water.bill.download');

Route::post('/water-bill-send-email', [WaterBillController::class, 'sendEmail'])->name('water.bill.sendEmail');
