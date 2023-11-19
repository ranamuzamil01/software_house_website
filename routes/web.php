<?php

use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});


Route::get('/product', function () {
    return view('product');
});
// Route::get('/inner-page', function () {
//     return view('inner-page');
// });


Route::get('/contact',[ContactFormController::class,'contact']);
Route::post('/contact',[ContactFormController::class,'store']);


Route::get('/team', function () {
    return view('team');
});


Route::post('/subscriber',[SubscriberController::class,'storeSubscriber'])->name('subscriber');

Route::get('/admin', function () {
    return view('Admin.index');
});



////////////////////// Admin Routes ///////////////////////////

//////////////////// DATA ///////////////////////

Route::get('/data-insert', function () {

    return view('Admin.data-insert');
});
Route::get('/view-data', function () {

    return view('Admin.view-data');
});

//////////////////// Services ///////////////////////

Route::get('/service-insert', function () {

    return view('Admin.service-insert');
})->name('um');

route::post('/store-service',[ServiceController::class,'storeservice']);
Route::get('/view-service',[ServiceController::class,'viewServices']);  
Route::get('/delete-service/{id}',[ServiceController::class,'deleteService'])->name('delete-service');


/////////////////////////////TABLE ///////////////////

Route::get('/view-table', function () {

    return view('Admin.view-table');
});


/////////////////////// contact us ////////////////

// Route::get('/contact-us', function () {

//     return view('Admin.contact-us');
// });

Route::get('/contact-us',[ContactFormController::class,'viewContact']);
Route::get('/deleteContact/{id}',[ContactFormController::class,'deleteContact'])->name('deleteContact');

/////////////////////////////// register ////////////////////

Route::get('/register', function () {

    return view('Admin.register');
});

////////////////////////// log in /////////////
Route::get('/login', function () {

    return view('Admin.login');
});





// route::get('/product',function(){
// $product = Product::where('id',3)->get();


// }
// );