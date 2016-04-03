<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::get('hoclara vel', function() {
    echo "Welcome to LARAVEL";
});

Route::get('thongtin', 'WelcomeController@showinfo');

Route::get('khoa-hoc', function() {
    return "Nguyen Duy";
});

Route::get('khoa-hoc/{monhoc}/{time}', function($monhoc, $time) {
    return "Nguyen human " . $monhoc . $time;
});

Route::get('call-view', function() {
    $hoten = "Duy d?p trai";
    $view = "Admin";
    return view('view', compact('hoten', 'view'));
});

Route::get('test-controller', 'WelcomeController@testAction');

Route::get('ho-chi-minh',['as' => 'hcm',function () {
    return 'Đây là trang tin quốc tế';
}]);

Route::group(['prefix' => 'thuc-don'], function() {
    
Route::get('bun-bo', function() {
   echo "Đây là trang bán bún bò"; 
});
Route::get('bun-mam', function() {
   echo "Đây là trang bán bún mắm"; 
});
Route::get('bun-reu', function() {
   echo "Đây là trang bán bún rêu"; 
});
});

Route::get('goi-master', function() {
  return view('views.layout');
});

Route::get('url/full', function() {
   return URL::full();
});


Route::get('url/asset', function() {
    return asset('css/mystyle.css');
});

Route::get('url/to', function() {
   return URL::to('thong-tin', ['duy', 'hello'], true);
});

Route::get('schema/create', function() {
   Schema::create('khoahoc', function($table) {
        $table->increments('id');
        $table->string('name', 50);
        $table->integer('price');
        $table->text('comment')->nullable();
        $table->timestamps();
    });
});

Route::get('schema/rename', function() {
   Schema::rename('khoahoc1', 'KHOAHOC');
});

Route::get('schema/change', function() {
    Schema::table('khoahoc', function($table) {
        $table->string('name', 55)->change();
    });
});