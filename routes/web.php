<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendControllers\HomeController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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

/************************** Default  Home Route  ***************************** */

Route::get('/', [HomeController::class, 'index']);



/*************************************************** Admin Accessible Routes ****************************************************************/




Route::middleware('auth', 'admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('layout-static', [DashboardController::class, 'static_navigation'])->name('layout-static');
    Route::get('layout-sidenav-light', [DashboardController::class, 'light_sidenav'])->name('layout-sidenav-light');
    // All routes within this group will require the admin identifier to be accessible.
    // You can define admin-specific routes here for CRUD operations, etc.

/*************************************************** Login Routes Start Here ****************************************************************/    



Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.store');


    Route::get('verify-email', EmailVerificationPromptController::class)
    ->name('verification.notice');

Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');

Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->name('password.confirm');

Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

Route::put('password', [PasswordController::class, 'update'])->name('password.update');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
/*************************************************** Login Routes End Here ******************************************************************* */




             /************************** Teachers Routes  ***************************** */

             Route::get('add-new-teachers',[TeachersController::class,'create']);
             Route::post('save-teacher',[TeachersController::class,'store']);
             Route::get('edit-teachers/{id}',[TeachersController::class,'edit']);
             Route::post('update-teacher/{id}',[TeachersController::class,'update']);
             Route::get('delete-teacher/{id}',[TeachersController::class,'destroy']);




             /************************** Courses Routes  ***************************** */
             
             Route::get('add-new-courses',[CoursesController::class,'create']);
             Route::post('save-courses',[CoursesController::class,'store']);
             Route::get('edit-courses/{id}',[CoursesController::class,'edit']);
             Route::post('update-course/{id}',[CoursesController::class,'update']);
             Route::get('delete-course/{id}',[CoursesController::class,'destroy']);
    
    
             /************************** Profile Routes*********************************************** */

             Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
             Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
             Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*********************************** Public Accessible Routes ************************************************** */


/*********************************** Login Credentials For Public *********************************************** */

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    /*********************************** Register Credentials For Public *********************************************** */


    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);


/************************** Default  Home Route  ***************************** */

    Route::get('Home', [HomeController::class, 'index']);



    /************************** Teachers Routes  ***************************** */
    Route::get('teachers',[TeachersController::class,'index']);
    Route::get('teachers-details/{id}',[TeachersController::class,'show']);


    
    
    /************************** Services Routes  ***************************** */
    Route::get('services',[ServicesController::class,'index']);
    
    
    
    /************************** About-us Routes  ***************************** */
    Route::get('about-us',[AboutController::class,'index']);
    
    
    /************************** Contact Routes  ***************************** */
    Route::get('contact',[ContactController::class,'index']);
    
    
    
    
    
    /************************** Courses Routes  ***************************** */
    Route::get('case-study',[CoursesController::class,'index']);
    Route::get('case-details/{id}',[CoursesController::class,'show']);

    
    
    
    
    
    /************************** Signin Routes  ***************************** */
    /* Route::get('sign-in',[SigninController::class,'index']); */

    

/* require __DIR__.'/auth.php'; */
 