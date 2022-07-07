<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Mail\AdminWelcomEmail;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

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

// Route::view('cms/admin', 'cms.index');

// Route::prefix('cms/admin')->group(function(){
//     Route::view('login',[AuthController::class,'ShowLogin']);
// });


Route::get('/email/verify', function () {
    return view('cms.auth.verify-email');
})->middleware('auth:admin')->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    // return back()->with('message', 'Verification link sent!');
    return response()->json(['message'=>'Verification link sent!'],Response::HTTP_OK);
})->middleware(['auth:admin', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/cms/admin');
})->middleware(['auth:admin', 'signed'])->name('verification.verify');

Route::prefix('cms')->middleware('guest:admin,client')->group(function(){
    Route::get('{guard}/login',[AuthController::class,'ShowLogin'])->name('auth.login.view');
    Route::post('login',[AuthController::class, 'Login'])->name('auth.login');

});


Route::prefix('cms/admin')->middleware(['auth:admin,client','verified'])->group(function(){

    Route::resource('roles',RoleController::class);
    Route::resource('permissions',PermissionController::class);
    Route::put('roles/{role}/permissions',[RolePermissionController::class, 'update'])->name('rindexole-permission.update');
});

Route::prefix('cms/admin')->middleware(['auth:admin,client','verified'])->group(function(){

    // Route::view('/','cms/dashboard');
    Route::get('/',[Dashboard::class,'index'])->name('dashboard');
    Route::resource('admins',AdminController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('memberships',MembershipController::class);
    Route::resource('invoices', InvoiceController::class);
    


    /*************** edit and update password ***************/
    Route::get('edit-password', [AuthController::class, 'editPassword'])->name('auth.edit-password');
    Route::put('update-password', [AuthController::class, 'updatePassword']);

    /*************** edit and update profile ***************/
    Route::get('edit-profile', [AuthController::class, 'editProfile'])->name('auth.edit-profile');
    Route::put('update-profile', [AuthController::class, 'updateProfile']);


    /*************** logout ***************/
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    // Route::view('ss','cms.system-settings.create');
});

// Route::get('email',function(){
//     return new AdminWelcomEmail();
// });
