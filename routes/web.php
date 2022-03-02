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
// use App\Http\Controllers\PlotController;
use App\Http\Controllers\PlotsController;
use App\Http\Controllers\MailboxController;


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
Route::get('cemetery/getInvitePeople', [CemeteryController::class, 'getInvitePeople'])->name('cemetery.getInvitePeople')->middleware('auth');
Route::post('cemetery/storeInvitePeople', [CemeteryController::class, 'storeInvitePeople'])->name('cemetery.storeInvitePeople')->middleware('auth');

Route::get('cemetery/getAddMember', [CemeteryController::class, 'getAddMember'])->middleware('auth');
Route::get('cemetery/manageMember', [CemeteryController::class, 'manageMember'])->middleware('auth');
Route::get('cemetery/dataSync', [CemeteryController::class, 'dataSync'])->middleware('auth');
Route::get('cemetery/getEdit', [CemeteryController::class, 'getEdit'])->middleware('auth');
Route::get('cemetery/cemeteryListDetails', [CemeteryController::class, 'cemeteryListDetails']);
Route::get('cemetery/cemeteryListView', [CemeteryController::class, 'cemeteryListView']);

Route::get('cemetery/cemeteryDetailPage', [CemeteryController::class, 'cemeteryDetailPage']);
Route::get('cemetery/widget', [CemeteryController::class, 'cemeteryDetailPagenew']);
Route::get('cemetery/cemls', [CemeteryController::class, 'cemeteryDetail']);
Route::get('cemetery/getEdit', [CemeteryController::class, 'getEdit'])->middleware('auth');
Route::post('savecemetery', [CemeteryController::class, 'savecemetery']); 
//Route::get('cemeteries', [CemeteryController::class, 'index'])->middleware('auth'); 
Route::resource('cemeteries', CemeteryController::class)->middleware('auth');

// Route::resource('cemeterys', CemeteryController::class)->middleware('auth');
//Route::resource('cemetery', CemeteryController::class, ['except' => [
   // 'index'
//]])->middleware('auth');
// Route::resource('cemeterys', CemeteryController::class)->middleware('auth');
// Route::get('roles/getEdit', [CemeteryController::class, 'getEdit'])->middleware('auth');

//PLOT
Route::resource('plots', PlotsController::class)->middleware('auth');
Route::get('deleteplots/{id}', [PlotsController::class, 'destroy']); 
Route::get('plot/getEdit', [PlotsController::class, 'getEdit'])->middleware('auth');





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

// Route::get('roles/getEdit', [RoleController::class, 'getEdit'])->middleware('auth');

Route::resource('roles', RoleController::class)->middleware('auth');
Route::post('updateRole', [RoleController::class, 'update'])->middleware('auth');

// Route::get('/managerole', 'App\Http\Controllers\RoleController@index')->middleware('auth');
// Route::get('/addrole', 'App\Http\Controllers\RolesController@add');
// Route::post('/saverole', 'App\Http\Controllers\RolesController@save');
// Route::get('editrole/{id}', 'App\Http\Controllers\RolesController@edit');
// Route::get('deleterole/{id}', 'App\Http\Controllers\RolesController@delete');
// Route::post('/updaterole', 'App\Http\Controllers\RolesController@update');
// Route::get('viewrole/{id}', 'App\Http\Controllers\RolesController@view');

// Route::resource('roles', BlogController::class);

Route::resource('permissions', RoleController::class)->middleware('auth');
Route::post('updatepermissions', [RoleController::class, 'update'])->middleware('auth');



// Route::resource('photos', PhotoController::class);
Route::resource('mailbox', MailboxController::class)->middleware('auth');
Route::get('user/profile', [UserController::class, 'profile'])->middleware('auth');
Route::post('user/updateProfile', [UserController::class, 'updateProfile'])->middleware('auth');

Route::get('users/Edit/{id}', [UserController::class, 'getEdit'])->middleware('auth');
Route::post('updateUser', [UserController::class, 'updateUser'])->middleware('auth');
Route::post('user/getCemeteryList', [UserController::class, 'getCemeteryList'])->name('user.getCemeteryList')->middleware('auth');


Route::resource('users', UserController::class)->middleware('auth');



//password
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');


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
Route::post('cemeteries/update-feature', [CemeteryController::class, 'updateFeature'])->middleware('auth');
Route::post('plots/update-feature', [PlotsController::class, 'updateFeature'])->middleware('auth');
Route::post('users/update-feature', [UserController::class, 'updateFeature'])->middleware('auth');
Route::post('cemeteries/update-public', [CemeteryController::class, 'updatePublic'])->middleware('auth');
Route::post('plots/get-locationtitle1', [PlotsController::class, 'getLocationtitle1'])->middleware('auth');
Route::post('plots/get-locationtitle2', [PlotsController::class, 'getLocationtitle2'])->middleware('auth');
Route::post('plots/get-locationtitle3', [PlotsController::class, 'getLocationtitle3'])->middleware('auth');
Route::post('plots/get-locationtitle4', [PlotsController::class, 'getLocationtitle4'])->middleware('auth');
Route::post('plots/get-locationtitle5', [PlotsController::class, 'getLocationtitle5'])->middleware('auth');
Route::post('plots/get-locationtitle6', [PlotsController::class, 'getLocationtitle6'])->middleware('auth');
Route::post('plots/get-destroyplotimage', [PlotsController::class, 'destroyplotimage'])->middleware('auth');
Route::post('widgets/update-feature', [DashboardController::class, 'updateFeature'])->middleware('auth');
Route::delete('allmaildatadelete', [MailboxController::class, 'deleteAll']);
Route::post('fetchstates',[CemeteryController::class, 'fetchstates']);
Route::post('cemeteries/get-destroycemeteryimage', [CemeteryController::class, 'destroycemeteryimage'])->middleware('auth');
