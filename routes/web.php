<?php

use App\Http\Controllers\MasterController;
use App\Models\Admin;
use App\Models\master;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    $mas = master::all();
    return view('dashboard',compact('mas'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    $etd = User::all();
    $mas = master::all();
    // dd($etd);
    return view('admin.dashboard',compact('etd'),compact('mas'));
    

})->middleware(['auth:admin'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('/', function () {
    return view('home');
});
Route::resource('master',MasterController::class);