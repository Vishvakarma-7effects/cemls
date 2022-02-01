<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CemeteryController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\PlotController;
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

//===========Frontend Routes================
Route::get('/', [HomeController::class, 'index']);
Route::get('about-us', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('faq', [HomeController::class, 'faq']);
Route::get('contact-us', [HomeController::class, 'contact']);
Route::get('register', function () {
    return redirect('organizer-registration/1');
})->name('register');

Route::get('event/{urlSlug}', [HomeController::class, 'event']);
Route::get('page/{urlSlug}', [HomeController::class, 'page']);
Route::get('pricing', [HomeController::class, 'packages']);
Route::match(['get', 'post'], 'organizer-registration/{step}', [HomeController::class,'organizerReg']);
Route::post('saveOrganizer', [HomeController::class, 'saveOrganizer']);
Route::post('saveAttendee', [HomeController::class, 'saveAttendee']);
Route::post('set-package', [HomeController::class, 'setPackage']);
Route::post('set-qty', [HomeController::class, 'setQty']);
Route::view('checkout', 'frontendCheckOut');
//=============Backend Routes=============
//Route::view('dashboard', 'dashboard')->middleware('auth');
Route::view('orders', 'orders')->middleware('auth');
Route::view('address', 'address')->middleware('auth');
//Route::view('account-details', 'accountDetails')->middleware('auth');

Route::view('create-orgnizer', 'createOrgniser')->middleware('auth');
Route::view('manage-orgnizer', 'showOrgniser')->middleware('auth');


Route::resource('events', EventController::class)->middleware('auth');
Route::get('cemeterys/getInvitePeople', [CemeteryController::class, 'getInvitePeople']);
Route::get('cemeterys/getAddMember', [CemeteryController::class, 'getAddMember']);
Route::get('cemeterys/manageMember', [CemeteryController::class, 'manageMember']);
Route::get('cemeterys/dataSync', [CemeteryController::class, 'dataSync']);
Route::get('cemeterys/getEdit', [CemeteryController::class, 'getEdit'])->middleware('auth');
Route::get('cemeterys/cemeteryListDetails', [CemeteryController::class, 'cemeteryListDetails']);
Route::get('cemeterys/cemeteryListView', [CemeteryController::class, 'cemeteryListView']);

Route::get('cemeterys/getEdit', [CemeteryController::class, 'getEdit']);
Route::resource('cemeterys', CemeteryController::class)->middleware('auth');
// Route::resource('cemeterys', CemeteryController::class)->middleware('auth');
// Route::get('roles/getEdit', [CemeteryController::class, 'getEdit'])->middleware('auth');
Route::get('plots/getEdit', [PlotController::class, 'getEdit']);
Route::get('plots/customeNew', [PlotController::class, 'customeNew']);
Route::resource('plots', PlotController::class)->middleware('auth');

Route::resource('pages', PageController::class)->middleware('auth');
Route::resource('menus', MenuController::class)->middleware('auth');
Route::resource('venues', VenueController::class)->middleware('auth');
Route::resource('organizers', OrganizerController::class)->middleware('auth');
Route::resource('packages', PackageController::class)->middleware('auth');
Route::resource('categories', CategoryController::class)->middleware('auth');

    // Roles
// Route::delete('role/destroy', 'RoleController@massDestroy')->name('role.massDestroy');
// Route::resource('role', 'RoleController');

// Route::get('role/assign/{roleId}', [RoleController::class, 'assignRole'])->middleware('auth');
// Route::post('role/savePermission/{roleId}', [RoleController::class, 'savePermission'])->middleware('auth');

Route::get('roles/getEdit', [RoleController::class, 'getEdit'])->middleware('auth');

Route::resource('roles', RoleController::class)->middleware('auth');

// Route::resource('photos', PhotoController::class);
Route::get('communication', [UserController::class, 'communication'])->middleware('auth');
Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('user/updateProfile', [UserController::class, 'updateProfile'])->middleware('auth');

Route::get('users/getEdit', [UserController::class, 'getEdit'])->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

Route::resource('camera', CameraController::class)->middleware('auth');

Route::get('attendee/create/{id}', [AttendeeController::class, 'create'])->middleware('auth');
Route::resource('attendee', AttendeeController::class)->middleware('auth');

Route::get('events/edits/{id}', [EventController::class, 'editByParam']);

Route::get('aboutUs', [DashboardController::class, 'aboutUs'])->middleware('auth');
Route::get('contactUs', [DashboardController::class, 'contactUs'])->middleware('auth');
Route::get('widgets', [DashboardController::class, 'widgets'])->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('billing/paid-invoices', [BillingController::class, 'paid_invoices'])->middleware('auth');
Route::get('billing/unpaid-invoices', [BillingController::class, 'unpaid_invoices'])->middleware('auth');
Route::get('billing/billed-event', [BillingController::class, 'billed_event'])->middleware('auth');
Route::get('billing/unbilled-event', [BillingController::class, 'unbilled_event'])->middleware('auth');
Route::resource('billing', BillingController::class)->middleware('auth');

Route::get('orders/recent-orders', [OrderController::class, 'recent_orders'])->middleware('auth');
Route::get('orders/recent-unpaid-orders', [OrderController::class, 'recent_unpaid_orders'])->middleware('auth');

Route::get('stripe', [HomeController::class, 'stripe']);
Route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');
Route::resource('inbox', InboxController::class)->middleware('auth');
