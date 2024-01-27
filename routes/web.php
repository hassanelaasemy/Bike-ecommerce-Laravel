<?php

use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeUsercontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Paniercontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;


// Routes View:
Route::get('/' ,[HomeUsercontroller::class,'indexHopme'])->name('Home');
Route::get('/Mountain' ,[HomeUsercontroller::class,'indexMountain'])->name('Mountain');
Route::get('/Hybrid' ,[HomeUsercontroller::class,'indexHybrid'])->name('Hybrid');
Route::get('/City' ,[HomeUsercontroller::class,'indexCity'])->name('City');
Route::get('/Electric' ,[HomeUsercontroller::class,'indexElectric'])->name('Electric');
Route::get('/Road' ,[HomeUsercontroller::class,'indexRoad'])->name('Road');
Route::get('/Contact' ,[HomeUsercontroller::class,'indexContact'])->name('Contact');
//  show view:
Route::get('/show' ,[HomeUsercontroller::class,'show'])->name('show');
// show product:
Route::get('/show/{product}' ,[ProductController::class,'getproductbyid'])->name('getproductbyid');
// send message :
Route::post('/send' ,[ContactController::class,'sendMessage'])->name('sendMessage');
// panier view:
Route::get('/panier' ,[HomeUsercontroller::class,'showpanier'])->name('showpanier');
// commande view:
Route::get('/commandshow' ,[OrderController::class,'commandshow'])->name('commandshow');
// command method:
Route::post('/sendcommand' ,[OrderController::class,'sendcommand'])->name('sendcommand');




//--------------------------------------admin routes:
Route::get('/admin' ,[Admincontroller::class,'dashboardAdmin'])->name('dashboardAdmin');
Route::get('/products' ,[Admincontroller::class,'adminproduct'])->name('adminproduct');
Route::get('/dashboard' ,[Admincontroller::class,'Admindash'])->name('Admindash');
Route::get('/Admincategory' ,[Admincontroller::class,'Admincategory'])->name('Admincategory');
// delete product: 
Route::get('/deletepro/{id}' ,[Admincontroller::class,'deleteproduct'])->name('deleteproduct');
// add product:
Route::post('/add' ,[ProductController::class,'addProduct'])->name('addProduct');
// view for update product:
Route::get('/UpdatePro/{id}' ,[Admincontroller::class,'UpdatePro'])->name('UpdatePro');
Route::put('/updateProduct/{id}' ,[ProductController::class,'updateProduct'])->name('updateProduct');



// category:
Route::post('/addcat' ,[CategorieController::class,'addCategory'])->name('addCategory');
Route::get('/addcat/{categoryId}' ,[CategorieController::class,'deleteCategory'])->name('deleteCategory');




// panier Route:
Route::get('/ajouteroanier/{id}' ,[Paniercontroller::class,'create'])->name('create.session');
Route::get('/Session/editmoins/{name}', [Paniercontroller::class , 'editmoins'])->name('editmoins');
Route::get('/Session/editplus/{name}', [Paniercontroller::class , 'editplus'])->name('editplus');
Route::post('/Session/delet/', [Paniercontroller::class , 'destroy'])->name('delete-data');


// order:
Route::get('/getallorder' ,[OrderController::class,'getallorder'])->name('getallorder');





Route::get('/testsendmail',function(){
  // return 'hydhdh';
  Mail::to('elaasemyhassan01@gmail.com')->send(new Testmail());
});
Route::view('/sendmaill','emails.testemail');


Route::fallback(function () {
  return view('pages.err');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
