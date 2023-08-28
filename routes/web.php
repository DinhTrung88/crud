<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Models\Post;
use App\Http\Controllers\SinhvienController;
// Route::get('/', function () {
   
//     $posts = Post::all();
//     return view('posts', [
//         'posts' => $posts
//     ]);
// });
// Route::get('posts/{post}', function ($slug) {
//     $post = Post::find($slug);
//     return view('post',[
//         'post' => $post
//     ]);
// })->where('post','[A-z_\-]+');
Route::get('/',function(){
    return view('home');
});
Route::get('/student',[SinhvienController::class, 'index'])->name('student.index');
Route::get('/student/login',[SinhvienController::class, 'login'])->name('student.login');
Route::get('/student/create',[SinhvienController::class, 'create'])->name('student.create');
Route::post('/student',[SinhvienController::class, 'store'])->name('student.store'); 
Route::get('/student/{student}/edit',[SinhvienController::class, 'edit'])->name('student.edit'); 
Route::put('/student/{student}/update',[SinhvienController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/delete',[SinhvienController::class, 'delete'])->name('student.delete'); 


