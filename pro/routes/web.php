<?php
// use Session;
use Illuminate\Support\Facades\Session;
use App\admin;
use App\work;
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

Route::get('FoodAdmin', function () {
    return view('Admin/login');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('menu', function () {
	$ressss=work::all();
    return view('menu',compact('ressss'));
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('home', function () {
	$res=admin::all();
    return view('home',compact('res'));
});
Route::get('home1', function () {
	$res=work::all();
    return view('home1',compact('res'));
});
Route::get('display', function () {
	$users=work::all();
    return view('display');
});

Route::get('admindashboard', function () {
	if(Session::get('admin'))
	{
		return view('Admin/dashboard');
	}
	else
	{
		return view('Admin/login');
	}
});

Route::get('addfood', function () {
	$resss=work::all();
    return view('Admin/addfood',compact('resss'));
});
Route::get('viewfood', function () {
	$resss=work::all();
    return view('Admin/viewfood',compact('resss'));
});

Route::post('adminlogin','AdminController@adminlogin');
Route::get('alogout','AdminController@alogout');
Route::post('adddqry','homecontroller@adddqry');
Route::post('addqry','home1controller@addqry');
Route::get('edit/{id}','home1controller@edit');
Route::post('editqry','home1controller@editqry');
Route::get('delete/{id}','home1controller@delete');
Route::get('view','viewcontroller@index');
