<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsApiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',                [PostsApiController::class, 'index'])    ->name('post.index');
Route::post('/posts',               [PostsApiController::class, 'store'])    ->name('post.store');
Route::put('posts/update/{post}',   [PostsApiController::class, 'update'])   ->name('post.update');
Route::delete('posts/delete/{post}',[PostsApiController::class, 'delete'])   ->name('post.delete');


//Route::get('/posts',function (){
//    return Post::all();
//});

//Route::post('/posts',function (){
//
//    request()->validate([
//        'title' => 'required',
//        'content' => 'required',
//    ]);
//
//    return Post::create([
//        'title' => request('title'),
//        'content' => request('content'),
//    ]);
//});

//Route::put('posts/update/{post}',function (Post $post){
//    request()->validate([
//        'title' => 'required',
//        'content' => 'required',
//    ]);
//
//   $success= $post->update([
//        'title'=>request('title'),
//        'content'=>request('content'),
//    ]);
//    return ['result'=> $success];
//});

//Route::delete('posts/delete/{post}',function (Post $post){
//   $success= $post->delete();
//    return ['result'=> $success];
//});
