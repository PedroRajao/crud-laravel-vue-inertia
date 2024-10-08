

<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');

Route::get('post/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::put('post/update/{post}', [PostController::class, 'update'])->name('post.update');

Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::delete('post/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');


// Route::resource('post', PostController::class);

// Route::get('/about', function () {
//     return Inertia::render('About');
// });
