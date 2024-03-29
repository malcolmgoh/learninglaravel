<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
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

Route::get('/', function () {

    return view('posts', [
        'posts'=>Post::with('category')->get()
    ]);
    //ddd($posts[0]->body);
});

 
Route::get('posts/{post:slug}',function(Post $post){

    return view('post',[
        'post'=>$post
    ]);

});

Route::get('categories/{category:slug}',function(Category $category){

    return view('categories',[
        'posts'=>$category->posts
    ]);

});