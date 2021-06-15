<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Log\Logger;
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

Route::get('/', function () {
    // foreach($files as $file){


    //     $posts[]=new Post(
    //         $documents->title,
    //         $documents->excerpt,
    //         $documents->date,
    //         $documents->slug,
    //         $documents->body()

    //     );
    // }
    // $posts[]=array_map(function($file){
    //     $documents=YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $documents->title,
    //         $documents->excerpt,
    //         $documents->date,
    //         $documents->slug,
    //         $documents->body()
    //     );
    // },File::files(resource_path('posts')));
    // $posts=Post::all();
    //used to debug sql queries at particular route
    // \Illuminate\Support\Facades\DB::listen(function($query){
    //     logger($query->sql,$query->bindings);
    // });
        //eliminate n+1 using Post::with('category')->get
    return view('posts', ["posts" => Post::latest()->with('category','author')->get()]);
});
Route::get('post/{post:slug}', function (Post $post) {
    
    return view('post', ["post" => $post]);


    //used for caching expensive operations to 5 seconds 
    // $post=cache()->remember("posts{$slug}",5,function() use ($path) {
    //    var_dump("file get contents");
    //     return file_get_contents($path);
    // });

    //used for passing data only
    //return view('post',['post'=>'<h1>Hello World</h1>']);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('posts',["posts"=>$category->posts]);
});
Route::get('authors/{author:username}', function (User $author) {
    return view('posts',["posts"=>$author->posts]);
});