<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PC Project</title>
</head>

<body style="background-color: #1D2940; display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; color:white; overflow:hidden">
    <img src="https://project-kuwait.com/storage/2024/05/26/01HYVAW2J3AA9S543NCC4Z24Z2.png" width="200px" >
    <h1 style="font-size: 4rem;">COMING SOON</h1>
</body>

</html>
';
});

Route::get('/home', function () {
    return view('welcome' , [
        'home' => app(\App\Settings\HomepageSettings::class),
        'posts' => \App\Models\Post::query()
            ->where('is_active' , true)
            ->orderByDesc('id')
            ->limit(4)
            ->get()
    ]);
})->name('home');

Route::get('/page/{Page:slug}', function (\App\Models\Page $Page) {
    return view('page' , ['page' => $Page]);
})->name('page');


Route::get('/service/{Service:slug}', function (\App\Models\Service $Service) {
    return view('service' , ['service' => $Service]);
})->name('service');
Route::view('/services', 'services')->name('services');

Route::get('/infrastructure/{Infrastructure:slug}', function (\App\Models\Infrastructure $Infrastructure) {
    return view('infrastructure' , ['infrastructure' => $Infrastructure]);
})->name('infrastructure');
Route::view('/infrastructures', 'infrastructures')->name('infrastructures');

Route::get('/article/{Post:slug}', function (\App\Models\Post $Post) {
    return view('post' , ['post' => $Post]);
})->name('post');
Route::get('/news-and-articles', function (\App\Models\Post $Post) {
    return view('posts' , ['posts' => \App\Models\Post::query()
        ->where('is_active' , true)
        ->orderByDesc('id')
        ->paginate()]);
})->name('posts');


Route::view('/contact-us', 'contactUs')->name('contactUs');
Route::view('/career', 'career')->name('career');
Route::post('/contact-us', function (\Illuminate\Http\Request $request) {
    $path = null;
    if ( $request->hasFile('file') ){
        $path =now()->format('Y/m/d');
        $path = $request->file('file')->store('public/' .$path );
        $path = ltrim($path , 'public/');
    }
    \App\Models\Message::query()->create([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'phone' => $request->get('phone'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        'attachment' => $path,
        'subject' => $request->get('subject'),
        'ip' => $request->ip(),
    ]);
    return redirect()->back()->with('success', 'Your message has been sent.');
})->name('sendContactUs');

Route::post('/article/{Post:slug}/comment', function (\Illuminate\Http\Request $request,\App\Models\Post $Post) {
    $request->validate([
        'message' => 'required|string',
        'phone' => 'required',
        'email' => 'required|email',
        'last_name' => 'required|string',
        'first_name' => 'required|string',
    ]);
    \App\Models\Comment::query()->create([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'phone' => $request->get('phone'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        'post_id' => $Post->id,
    ]);
    return redirect()->back()->with('success', 'Your comment has been sent.');
})->name('sendComment');
