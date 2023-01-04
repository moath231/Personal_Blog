<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::post('/newsletter', function () {
    $mailchimp = new \MailchimpMarketing\ApiClient();

    request()->validate([
        'email' => 'required|email',
    ]);

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21',
    ]);
    try {
        $mailchimp->lists->addListMember('97469bde77', [
            'email_address' => request('email'),
            'status' => 'subscribed',
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => "this email can't be add to subscribe list",
        ]);
    }

    return redirect('/');
});

Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::post('/post/{post:slug}/comment', [PostCommentController::class, 'store']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'distroy'])->middleware('auth');

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});

Route::middleware('can:admin')->group(function () {
    Route::resource('admin/category', AdminCategoryController::class);
});
