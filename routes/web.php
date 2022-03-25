<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/khuyen', function(){
//     return 'hello_______ world';
// });

// Route::get('blogk20', function () {
//     return view('blogk20');
// });

// Route::get('main', function(){
//     return view('main');
// });

// Route::get('login', function(){
//     return view('login');
// });
// Route::get('register', function(){
//     return view('register');
// });


// client Routes

//Route::prefix('categories')->group(function () {
    // list
    Route::get('/main', [CategoriesController::class,'index']);
    Route::get('/blogk20', [CategoriesController::class,'blogk20']);
    Route::get('/register', [CategoriesController::class,'register']);
    //
    Route::get('/login', [CategoriesController::class,'login']);
    Route::post('/login', [CategoriesController::class,'login']);

    ////
    Route::get('/admin',function(){
        // return 'đây là trang quản trị viên';
        return view('administrator');
    })->middleware('validate_token');


    // Route::get('/admin2',function(){
    //     return 'hello';
    // });
    
    Route::get('/error',function(){
        return 'Bạn đã nhập sai';
    });


    //trang quản trị
    Route::get('/ad',function(){
        return view('administrator');        
    });


    Route::get('/er',function(){
        return view('error');
    });



//});




