<?php

use App\User;
use App\Mail\SendMail;
use App\Mail\ShowUserName;
use Illuminate\Http\Request;
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


Route::get("d",function(Request $request){
    $user=User::find(1);

 return (new ShowUserName)->render();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('file', function () {
    return view("demo1");
});

Route::get("show",function(){
    return "Debasis";
})->name("d");
