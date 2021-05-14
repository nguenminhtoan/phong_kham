<?php

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

//Route::filter('role', function()
//{ 
//  if ( Session::get("admin")->id_nguoidung != 1) {
//     // do something
//     return Redirect::to('/admin/news'); 
//   }
//}); 

// Route::get('/send-mail', function () {
//     Mail::to('newuser@example.com')->send(new TestMail($data)); 
//     return 'A message has been sent to Mailtrap!';
// })


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    Route::get('/login',"AdminLoginController@index");
    Route::post('/auth',"AdminLoginController@auth");
    Route::get('/logout',"AdminLoginController@logout");
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', "middleware" => "login"], function()
{
    
    
    // Controllers Within The "App\Http\Controllers\Admin" Namespace

    Route::group(['prefix' => 'banner'], function()
    {
        Route::get("/", "AdminBannerController@index");
        Route::get("new", "AdminBannerController@create");
        Route::get("edit/{id}", "AdminBannerController@edit");
        Route::post("save", "AdminBannerController@save");
        Route::post("update", "AdminBannerController@update");
        Route::get("delete/{id}", "AdminBannerController@delete");
    });
    
    Route::group(['prefix' => 'benh'], function()
    {
        Route::get("/", "AdminBenhController@index");
        Route::get("new", "AdminBenhController@create");
        Route::get("edit/{id}", "AdminBenhController@edit");
        Route::post("save", "AdminBenhController@save");
        Route::post("update", "AdminBenhController@update");
        Route::get("delete/{id}", "AdminBenhController@delete");
    });
    
    Route::group(['prefix' => 'news'], function()
    {
        Route::get("/", "AdminNewsController@index");
        Route::get("new", "AdminNewsController@create");
        Route::get("edit/{id}", "AdminNewsController@edit");
        Route::post("save", "AdminNewsController@save");
        Route::post("update", "AdminNewsController@update");
        Route::get("delete/{id}", "AdminNewsController@delete");
    });
    
    Route::group(['prefix' => 'video'], function()
    {
        Route::get("/", "AdminVideoController@index");
        Route::get("new", "AdminVideoController@create");
        Route::get("edit/{id}", "AdminVideoController@edit");
        Route::post("save", "AdminVideoController@save");
        Route::post("update", "AdminVideoController@update");
        Route::get("delete/{id}", "AdminVideoController@delete");
    });
    
    
    Route::group(['prefix' => 'voucher'], function()
    {
        Route::get("/", "AdminVoucherController@index");
        Route::get("new", "AdminVoucherController@create");
        Route::get("edit/{id}", "AdminVoucherController@edit");
        Route::post("save", "AdminVoucherController@save");
        Route::post("update", "AdminVoucherController@update");
        Route::get("delete/{id}", "AdminVoucherController@delete");
    });
    
    
    
    Route::group(['prefix' => 'hoatdong'], function()
    {
        Route::get("/", "AdminHoatdongController@index");
        Route::get("new", "AdminHoatdongController@create");
        Route::get("edit/{id}", "AdminHoatdongController@edit");
        Route::post("save", "AdminHoatdongController@save");
        Route::post("update", "AdminHoatdongController@update");
        Route::get("delete/{id}", "AdminHoatdongController@delete");
    });
    
    
    Route::group(['prefix' => 'customer', "middleware" => "admin"], function()
    {
        
        Route::get("/", "AdminCustomerController@index");
        Route::get("new", "AdminCustomerController@create");
        Route::get("edit/{id}", "AdminCustomerController@edit");
        Route::post("save", "AdminCustomerController@save");
        Route::post("update", "AdminCustomerController@update");
        Route::get("delete/{id}", "AdminCustomerController@delete");
        
    });
    
    
    Route::group(['prefix' => 'categories'], function()
    {
        Route::get("/", "AdminCategoriesController@index");
        Route::get("new", "AdminCategoriesController@create");
        Route::get("edit/{id}", "AdminCategoriesController@edit");
        Route::post("save", "AdminCategoriesController@save");
        Route::post("update", "AdminCategoriesController@update");
        Route::get("delete/{id}", "AdminCategoriesController@delete");
    });
    
    
    Route::group(['prefix' => 'setting'], function()
    {
        Route::get("/", "AdminSettingController@index");
        Route::post("update", "AdminSettingController@update");
    });
    
    
    Route::group(['prefix' => 'upload'], function()
    {
        Route::get("/", "AdminUploadController@index");
        Route::post("/", "AdminUploadController@update");
    });
    
});


//Route::get('/khuyen-dung',"HomeController@show");
//Route::get('/khuyen-mai/{id}',"HomeController@detail");
//Route::get('/khuyen-mai',"HomeController@show");
//Route::get('/khuyen-dung/{id}',"HomeController@detail");
Route::get('/dathen/input',"DathenController@index");
Route::post('/dathen/confirm',"DathenController@index");
Route::get('/ajax/index',"AjaxController@index");
Route::get('/',"HomeController@index");
Route::get('/{link}',"HomeController@show");
Route::get('/{link}/{id}',"HomeController@detail");
