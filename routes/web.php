<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\TypeProduitController;
use App\Http\Controllers\Dashboard\BandController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\ProjetController;
use App\Http\Controllers\Dashboard\DomaineController;
use App\Http\Controllers\Dashboard\MembresController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DocumentsController;
use App\Http\Controllers\Dashboard\PartenairesController;
use App\Http\Controllers\Dashboard\ChangePasswordController;

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
     return view('welcome');
 })->name('accueil');
 Route::get('/accueil;', function () {
     return view('welcome');
 })->name('accueils');



Auth::routes();
// Route::get('/',  function () {
//     return redirect()->route('login');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', function () {
        return redirect()->route('accueil');
    });
    Route::resource('/manage-produit', ProjetController::class);

    
    Route::resource('/dashboard', DashboardController::class);

  //creation des utilisateurs 

  // ROUTE PARTIES CONFIGURATION
  Route::resource('/produits', ProduitController::class);
  Route::resource('/commande', CommandeController::class);
  Route::match(['post', 'get'],'/produits/acheter/{id}', [App\Http\Controllers\ProduitController::class, 'acheter'])->name('acheter');
  Route::resource('/type_produit', TypeProduitController::class);
  Route::resource('/manage-domaine', DomaineController::class);
  Route::resource('/manage-band', BandController::class);
  Route::resource('/manage-membre', MembresController::class);
  Route::resource('/manage-partenaire', PartenairesController::class);
  Route::resource('/manage-new', NewsController::class);
  Route::resource('/manage-document', DocumentsController::class);






    Route::resource('/change-password', ChangePasswordController::class );

   Route::post('logout', function() {
        Auth::logout();
        return redirect('/');

    })->name('logout');

});