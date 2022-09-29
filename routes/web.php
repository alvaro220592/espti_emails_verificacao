<?php

use App\Mail\TesteMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('testeMail', function() {
    $user = User::factory()->create();

    // return (new TesteMail($user))->render();
    
    // Mail::to('alvaro220592@gmail.com')->send(new TesteMail($user));
});

Route::get('testeMarkdown', function() {

    // return (new WelcomeMail())->render();
    
    Mail::to('alvaro220592@gmail.com')->send(new WelcomeMail);
});