<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Hnd\HndHomeController;
use App\Http\Controllers\hnd\HndPaymentController;
use App\Http\Controllers\Hnd\HndUsersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Nds\{UsersController,HomeController, NdsPaymentController};
use App\Http\Controllers\Nd\{NdUsersController,NdHomeController, NdPaymentController};

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UsersController as ControllersUsersController;
use App\Http\Middleware\Nd;
use App\Models\User;

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


Route::group(['middleware' => 'auth','prefix' => 'student'], function () {
    Route::get('/', function () {
        return redirect('login');
    });

    //Remita invoice
    Route::view('/hnd-invoice', 'hnd/invoice');
    Route::view('/student-payment-details', 'student/payment/details');

    Route::view('/analytics', 'applications/analytics');
    Route::view('/calendar', 'applications/calendar');
    Route::view('/datatable', 'applications/datatables');
    Route::view('/kanban', 'applications/kanban');
    Route::view('/wizard', 'applications/wizard');

    Route::view('/authentication-error404', 'authentication/error/404');
    Route::view('/authentication-error500', 'authentication/error/500');

    Route::view('/authentication-lock-basic', 'authentication/lock/basic');
    Route::view('/authentication-lock-cover', 'authentication/lock/cover');
    Route::view('/authentication-lock-illustration', 'authentication/lock/illustration');

    Route::view('/authentication-reset-basic', 'authentication/reset/basic');
    Route::view('/authentication-reset-cover', 'authentication/reset/cover');
    Route::view('/authentication-reset-illustration', 'authentication/reset/illustration');

    Route::view('/authentication-signin-basic', 'authentication/signin/basic');
    Route::view('/authentication-signin-cover', 'authentication/signin/cover');
    Route::view('/authentication-signin-illustration', 'authentication/signin/illustration');

    Route::view('/authentication-signup-basic', 'authentication/signup/basic');
    Route::view('/authentication-signup-cover', 'authentication/signup/cover');
    Route::view('/authentication-signup-illustration', 'authentication/signup/illustration');

    Route::view('/authentication-verification-basic', 'authentication/verification/basic');
    Route::view('/authentication-verification-cover', 'authentication/verification/cover');
    Route::view('/authentication-verification-illustration', 'authentication/verification/illustration');

    // Route::view('/dashboard-default', 'dashboards/default');
    Route::view('/dashboard-nd', 'dashboards/nd_dashboard');
    Route::view('/dashboard-hnd', 'dashboards/hnd_dashboard');
    Route::view('/dashboard-nds', 'dashboards/nds_dashboard');
    Route::view('/dashboard-cce', 'dashboards/cce_dashboard');
    Route::view('/dashboard-nce', 'dashboards/nce_dashboard');
    Route::view('/dashboard-automative', 'dashboards/automotive');
    Route::view('/dashboard-crm', 'dashboards/crm');
    Route::view('/dashboard-smart-home', 'dashboards/smart-home');

    Route::view('/dashboard-virtual-default', 'dashboards/vr/vr-default');
    Route::view('/dashboard-virtual-info', 'dashboards/vr/vr-info');

    Route::view('/ecommerce-overview', 'ecommerce/overview');
    Route::view('/ecommerce-referral', 'ecommerce/referral');

    Route::view('/ecommerce-products-edit-product', 'ecommerce/products/edit-product');
    Route::view('/ecommerce-products-new-product', 'ecommerce/products/new-product');
    Route::view('/ecommerce-products-page', 'ecommerce/products/product-page');
    Route::view('/ecommerce-products-list', 'ecommerce/products/products-list');

    Route::view('/ecommerce-orders-details', 'ecommerce/orders/details');

    Route::view('/ecommerce-orders-list', 'ecommerce/orders/list');

    Route::view('/pages-profile-overview', 'pages/profile/overview');
    Route::view('/pages-profile-projects', 'pages/profile/projects');
    Route::view('/pages-profile-teams', 'pages/profile/teams');

    Route::view('/pages-users-reports', 'pages/users/reports');
    Route::view('/pages-users-new', 'pages/users/new-user');

    Route::view('/pages-account-settings', 'pages/account/settings');
    Route::view('/pages-account-billing', 'pages/account/billing');
    Route::view('/pages-account-invoice', 'pages/account/invoice');
    Route::view('/pages-account-security', 'pages/account/security');

    Route::view('/pages-projects-general', 'pages/projects/general');
    Route::view('/pages-projects-new-project', 'pages/projects/new-project');
    Route::view('/pages-projects-timeline', 'pages/projects/timeline');

    Route::view('/pages-charts', 'pages/charts');
    Route::view('/pages-notifications', 'pages/notifications');
    Route::view('/pages-pricing', 'pages/pricing-page');
    Route::view('/pages-rtl', 'pages/rtl-page');
    Route::view('/pages-sweet-alerts', 'pages/sweet-alerts');
    Route::view('/pages-widgets', 'pages/widgets');

    Route::post('/laravel-new-role', [RolesController::class, 'store']);
    Route::get('/laravel-new-role', [RolesController::class, 'createNew']);
    Route::post('/laravel-edit-role/{id}', [RolesController::class, 'edit']);
    Route::get('/laravel-edit-roles/{id}', [RolesController::class, 'createEdit']);
    Route::get('/laravel-roles-management', [RolesController::class, 'create']);
    Route::get('/laravel-delete-role/{id}', [RolesController::class, 'destroy']);

    Route::get('/laravel-new-tag', [TagsController::class, 'createNew']);
    Route::post('/laravel-new-tags', [TagsController::class, 'store']);
    Route::get('/laravel-edit-tags/{id}', [TagsController::class, 'createEdit']);
    Route::post('/laravel-edit-tag/{id}', [TagsController::class, 'edit']);
    Route::get('/laravel-tags-management', [TagsController::class, 'create']);
    Route::get('/laravel-delete-tag/{id}', [TagsController::class, 'destroy']);

    Route::get('/laravel-new-category', [CategoryController::class, 'createNew']);
    Route::post('/laravel-new-category', [CategoryController::class, 'store']);
    Route::get('/laravel-edit-categories/{id}', [CategoryController::class, 'createEdit']);
    Route::post('/laravel-edit-category/{id}', [CategoryController::class, 'edit']);
    Route::get('/laravel-category-management', [CategoryController::class, 'create']);
    Route::get('/laravel-delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('/laravel-user-profile', [UserProfileController::class, 'create']);
    Route::post('/laravel-save-user-profile', [UserProfileController::class, 'store']);

    Route::get('/laravel-new-user', [UsersController::class, 'createOne'])->name('users.create.step.one');








    Route::get('/laravel-edit-users/{id}', [UsersController::class, 'createEditOne'])->name('edit.create.step.one');
    Route::post('/edit-step-one/{id}', [UsersController::class, 'validateEditOne'])->name('edit.validate.step.one');
    Route::get('/edit-create-step-two/{id}', [UsersController::class, 'createEditTwo'])->name('edit.create.step.two');
    Route::post('/edit-step-two/{id}', [UsersController::class, 'validateEditTwo'])->name('edit.validate.step.two');
    Route::get('/edit-create-step-three/{id}', [UsersController::class, 'createEditThree'])->name('edit.create.step.three');
    Route::post('/edit-step-three/{id}', [UsersController::class, 'validateEditThree'])->name('edit.validate.step.three');
    Route::get('/edit-create-step-four/{id}', [UsersController::class, 'createEditFour'])->name('edit.create.step.four');

    Route::post('/laravel-new-user', [UsersController::class, 'store']);
    Route::post('/laravel-edit-user/{id}', [UsersController::class, 'edit']);
    Route::get('/laravel-users-management', [UsersController::class, 'create']);
    Route::get('/laravel-delete-user/{id}', [UsersController::class, 'destroy']);

    Route::get('/laravel-new-item', [ItemsController::class, 'createNew']);
    Route::post('/laravel-new-item', [ItemsController::class, 'store']);
    Route::get('/laravel-edit-items/{id}', [ItemsController::class, 'createEdit']);
    Route::post('/laravel-edit-item/{id}', [ItemsController::class, 'edit']);
    Route::get('/laravel-items-management', [ItemsController::class, 'create']);
    Route::get('/laravel-delete-item/{id}', [ItemsController::class, 'destroy']);

    Route::get('/logout', [SessionController::class, 'destroy']);
    Route::view('/login', 'dashboards/default')->name('sign-up');
        // ND Students
        Route::prefix('nd')->middleware('nd')->group(function(){
            Route::get('/index', [NdUsersController::class, 'index']);
            Route::post('/validate-step-one', [NdUsersController::class, 'validateOne'])->name('nd.validate.step.one');
            Route::post('/validate-step-two', [NdUsersController::class, 'validateTwo'])->name('nd.validate.step.two');
            Route::get('/nd-create-step-two', [NdUsersController::class, 'createTwo'])->name('nd.create.step.two');
            Route::get('/nd-create-step-three', [NdUsersController::class, 'createThree'])->name('nd.create.step.three');
            Route::post('/validate-step-three', [NndUsersController::class, 'validateThree'])->name('nd.validate.step.three');
            Route::get('/nd-create-step-four', [NdUsersController::class, 'createFour'])->name('nd.create.step.four');
            Route::post('/validate-step-four', [NdUsersController::class, 'validateFour'])->name('nd.validate.step.four');
            Route::post('/validate-step-five', [NdUsersController::class, 'validateFive'])->name('nd.validate.step.five');
            Route::get('/nd-create-step-five', [NdUsersController::class, 'createFive'])->name('nd.create.step.five');
            Route::get('/nd-create-step-six', [NdUsersController::class, 'createSix'])->name('nd.create.step.six');
            Route::post('/validate-step-six', [NdUsersController::class, 'validateSix'])->name('nd.validate.step.six');
            Route::get('print/form',[NdHomeController::class,'printForm'])->name('nd.print.form');
            Route::get('/dashboard', [NdHomeController::class, 'index'])->name('nd.dashboard');

                  //Payment Controller
          Route::get('/invoice', [HndPaymentController::class, 'invoice'])->name('hnd.invoice');
          Route::get('/admission/payment', [HndPaymentController::class, 'makeAdmissionPayment'])->name('hnd.payment');
          Route::get('/screening/status/{rrr}', [HndPaymentController::class, 'checkTransactionStatus'])->name('hnd.screening.status');
          Route::post('/remita-invoice', [HndPaymentController::class, 'generateInvoice'])->name('hnd.remita.invoice');

            Route::get('/get-courses/{department_id}', [HndUsersController::class, 'getCourses']);
            Route::get('/get-lgas/{state_id}', [HndUsersController::class, 'getLgas']);

        });
    // HND Students
    Route::prefix('hnd')->middleware('hnd')->group(function(){
        Route::get('/index', [HndUsersController::class, 'index']);
        Route::post('/validate-step-one', [HndUsersController::class, 'validateOne'])->name('hnd.validate.step.one');
        Route::post('/validate-step-two', [HndUsersController::class, 'validateTwo'])->name('hnd.validate.step.two');
        Route::get('/hnd-create-step-two', [HndUsersController::class, 'createTwo'])->name('hnd.create.step.two');
        Route::get('/hnd-create-step-three', [HndUsersController::class, 'createThree'])->name('hnd.create.step.three');
        Route::post('/validate-step-three', [HndUsersController::class, 'validateThree'])->name('hnd.validate.step.three');
        Route::get('/hnd-create-step-four', [HndUsersController::class, 'createFour'])->name('hnd.create.step.four');
        Route::post('/validate-step-four', [HndUsersController::class, 'validateFour'])->name('hnd.validate.step.four');
        Route::post('/validate-step-five', [HndUsersController::class, 'validateFive'])->name('hnd.validate.step.five');
        Route::get('/hnd-create-step-five', [HndUsersController::class, 'createFive'])->name('hnd.create.step.five');
        Route::get('/hnd-create-step-six', [HndUsersController::class, 'createSix'])->name('hnd.create.step.six');
        Route::post('/validate-step-six', [HndUsersController::class, 'validateSix'])->name('hnd.validate.step.six');
        Route::get('print/form',[HndHomeController::class,'printForm'])->name('hnd.print.form');
        Route::get('/dashboard', [HndHomeController::class, 'index'])->name('hnd.dashboard');

              //Payment Controller
      Route::get('/invoice', [HndPaymentController::class, 'invoice'])->name('hnd.invoice');
      Route::get('/admission/payment', [HndPaymentController::class, 'makeAdmissionPayment'])->name('hnd.payment');
      Route::get('/screening/status/{rrr}', [HndPaymentController::class, 'checkTransactionStatus'])->name('hnd.screening.status');
      Route::post('/remita-invoice', [HndPaymentController::class, 'generateInvoice'])->name('hnd.remita.invoice');

        Route::get('/get-courses/{department_id}', [HndUsersController::class, 'getCourses']);
        Route::get('/get-lgas/{state_id}', [HndUsersController::class, 'getLgas']);

    });

      // NDS Student
      Route::prefix('nds')->middleware('nds')->group(function(){
        Route::get('/index', [UsersController::class, 'index']);
        Route::post('/validate-step-one', [UsersController::class, 'validateOne'])->name('nds.validate.step.one');
        Route::post('/validate-step-two', [UsersController::class, 'validateTwo'])->name('nds.validate.step.two');
        Route::get('/nds-create-step-two', [UsersController::class, 'createTwo'])->name('nds.create.step.two');
        Route::get('/nds-create-step-three', [UsersController::class, 'createThree'])->name('nds.create.step.three');
        Route::post('/validate-step-three', [UsersController::class, 'validateThree'])->name('nds.validate.step.three');
        Route::get('/nds-create-step-four', [UsersController::class, 'createFour'])->name('nds.create.step.four');
        Route::post('/validate-step-four', [UsersController::class, 'validateFour'])->name('nds.validate.step.four');
        Route::post('/validate-step-five', [UsersController::class, 'validateFive'])->name('nds.validate.step.five');
        Route::get('/nds-create-step-five', [UsersController::class, 'createFive'])->name('nds.create.step.five');
        Route::get('/nds-create-step-six', [UsersController::class, 'createSix'])->name('nds.create.step.six');
        Route::post('/validate-step-six', [UsersController::class, 'validateSix'])->name('nds.validate.step.six');
        Route::get('print/form',[HomeController::class,'printForm'])->name('nds.print.form');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('nds.dashboard');
         //Payment Controller
      Route::get('/invoice', [NdsPaymentController::class, 'invoice'])->name('nds.invoice');
      Route::get('/screening/payment', [NdsPaymentController::class, 'makeScreeningPayment'])->name('nds.screening.payment');
      Route::get('/screening/status/{rrr}', [NdsPaymentController::class, 'checkTransactionStatus'])->name('nds.screening.status');
      Route::post('/remita-invoice', [NdsPaymentController::class, 'generateInvoice'])->name('nds.remita.invoice');

        Route::get('/get-courses/{department_id}', [UsersController::class, 'getCourses']);
        Route::get('/get-lgas/{state_id}', [UsersController::class, 'getLgas']);
      });





    // Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/session', [SessionController::class, 'store']);
    Route::get('/login/forgot-password', [ChangePasswordController::class, 'create']);

    Route::post('/forgot-password', [ChangePasswordController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ChangePasswordController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
    Route::get('/', function () {
        return redirect('/login');
    });

});
