<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
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
Route::prefix('/blog')->name('blog.')->group(function() {
    Route::get('/', function (Request $request){

        //return error 44 if not found
        // $posts = \App\Models\Post::findOrFail(22);

        //return max 22 post
        // $posts = \App\Models\Post::paginate(22);

        // edit
        // $post = \App\Models\Post::find(1);
        // $post->title = 'Nouveau titre 1';
        // $post->save();

        // delete
        // $post = \App\Models\Post::find(1);
        // $post->delete();



        dd($post);

        return [
            'link' => \route('blog.show', ['slug' => 'article', 'id' => 13])
        ];
    })->name('index');
    
    // URl with param
    Route::get('/{slug}-{id}', function(string $slug, string $id, Request $request) {
        return [
            'slug' => $slug,
            'id' => $id,
            'name' => $request->input('name')
        ];
        //constraints on param
    })->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');

});

