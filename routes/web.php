<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
})->name('home');







Route::get('/register', function () {
    return view('pages.register');
})->name('register');




Route::controller(AuthController::class)->group(function() {
    Route::post('registerSave', 'registerSave')->name('registerSave');
    Route::post('loginSave', 'loginAction')->name('loginSave');
    Route::post('logout', 'logout')->name("logout");
    
});










Route::middleware('auth')->group(function() {

    

Route::controller(BookController::class)->group(function() {
    Route::post('addBooks', 'addBooks')->name('addBooks');
    Route::get('add_books', 'getAddBooks')->name('add_books');
    Route::get('book_detail/{id}', 'book_detail')->name('book_detail');
    Route::post('add_comment', 'add_comment')->name('add_comment');
    Route::get('comments/{id}', 'view_comments')->name('view_comments');
    Route::put('/rating', 'rating_update')->name('rating.update');

});

    

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');



Route::get('/recommendations', function () {

    $books = Book::all();
    $topbooks = Book::select('book_id', 'title', 'author', 'image')
    ->orderByDesc(DB::raw('five_star * 5 + four_star * 4 + three_star * 3 + two_star * 2 + one_star'))
    ->orderByDesc(DB::raw('five_star'))
    ->limit(5)
    ->get();


    return view('pages.recommendations',compact('books','topbooks'));
    
})->name('recommendations');


    



});
