<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Symfony\Component\HttpFoundation\Request;

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

//prefix url + name
Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    
    // URl with param
    Route::get('/{slug}-{id}', [BlogController::class, 'show'])->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});

    // Route::get('/add', function (Request $request) {
    //     $post = new \App\Models\Post();
    //     $post->title = 'Mon second3 article';
    //     $post->slug = 'mon-second3-article';
    //     $post->content = 'Mon contenu';
    //     $post->save();

    //     return $post;
    // });
