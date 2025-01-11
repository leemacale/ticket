<?php

use App\Http\Controllers\BusPositionController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\DashcamController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\IncidentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TripController;
use App\Models\Companies;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/user/dashboard', function () {
    return view('user-dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');

Route::get('/terminal/dashboard', function () {
    return view('terminal-dashboard');
})->middleware(['auth', 'verified'])->name('terminal.dashboard');


Route::get('/conductor/dashboard', function () {
    return view('conductor-dashboard');
})->middleware(['auth', 'verified'])->name('conductor.dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//location routes

Route::get('/locations',[LocationController::class,'index'])->name('locations.index');
Route::get('/locations/add',[LocationController::class,'add'])->name('locations.add');
Route::put('/locations/store',[LocationController::class,'store'])->name('locations.store');
Route::delete('/locations/{location}',[LocationController::class,'destroy'])->name('locations.destroy');



//menu routes

Route::get('/menu',[MenuController::class,'index'])->name('menu.index');
Route::get('/menu/add',[MenuController::class,'add'])->name('menu.add');
Route::put('/menu/store',[MenuController::class,'store'])->name('menu.store');
Route::delete('/menu/{menu}',[MenuController::class,'destroy'])->name('menu.destroy');


//food
Route::get('/food/{trips}',[FoodController::class,'index'])->name('food.index');
Route::put('/food/add',[FoodController::class,'add'])->name('food.add');
Route::delete('/food/{foods}',[FoodController::class,'destroy'])->name('food.destroy');
Route::get('/food/{trips}/orders',[FoodController::class,'foodorders'])->name('food.orders');
//Company routes

Route::get('/company',[CompaniesController::class,'index'])->name('company.index');
Route::get('/company/add',[CompaniesController::class,'add'])->name('company.add');
Route::put('/company/store',[CompaniesController::class,'store'])->name('company.store');
Route::delete('/company/{company}',[CompaniesController::class,'destroy'])->name('company.destroy');


//Trips routes

Route::get('/trips',[TripController::class,'index'])->name('trips.index');
Route::get('/trips/add',[TripController::class,'add'])->name('trips.add');
Route::put('/trips/store',[TripController::class,'store'])->name('trips.store');
Route::delete('/trips/{trip}',[TripController::class,'destroy'])->name('trips.destroy');

Route::get('/trips/{trip}/location',[TripController::class,'loc'])->name('trips.loc');
Route::get('/trips/{ticket}/passengerlocation',[TripController::class,'loc2'])->name('trips.loc2');

Route::get('/bus/{trip}/location',[TripController::class,'add_loc'])->name('trips.add_loc');


Route::put('/bus/store/location',[BusPositionController::class,'store'])->name('bus.store');

//trips conductor routes
Route::get('/trips/conductor',[TripController::class,'index2'])->name('trips.index2');
Route::get('/bus/{trip}/status',[TripController::class,'bus_status'])->name('bus.status');
Route::get('/bus/{trip}/confirm',[TripController::class,'bus_confirm'])->name('bus.confirm');
Route::get('/bus/{trip}/arrival',[TripController::class,'bus_arrival'])->name('bus.arrival');

//conductor routes for admin
Route::get('/conductor',[CompaniesController::class,'conductor'])->name('conductors.index');
Route::delete('/conductor/{conductor}',[CompaniesController::class,'destroy2'])->name('conductors.destroy');
Route::get('/conductor/{conductor}/approve',[CompaniesController::class,'approve'])->name('conductors.approve');

Route::get('/passenger',[CompaniesController::class,'passenger'])->name('passenger.index');
Route::delete('/passenger/{passenger}',[CompaniesController::class,'destroypassenger'])->name('passenger.destroy');
Route::get('/passenger/{passenger}/approve',[CompaniesController::class,'approvepassenger'])->name('passenger.approve');

Route::get('/ticket/{ticket}/edit',[CompaniesController::class,'edits'])->name('passenger.edit');
Route::post('/ticket/patch',[CompaniesController::class,'saveedit'])->name('passenger.saveedit');



Route::put('/search/trips',[TripController::class,'search'])->name('search.trips');
Route::get('/salesreport',[SearchController::class,'sales'])->name('sales.index');



Route::get('/tickets/booked',[TicketController::class,'index'])->name('tickets.index');
Route::get('/trip/{trip}/book',[TicketController::class,'booking'])->middleware(['auth', 'verified'])->name('book.trip');
Route::put('/ticket/store',[TicketController::class,'store'])->name('ticket.store');
Route::delete('/ticket/{ticket}',[TicketController::class,'destroy'])->name('ticket.destroy');
Route::get('/ticket/{ticket}/viewticket',[TicketController::class,'views'])->name('ticket.views');


Route::get('/booking/adminview',[TicketController::class,'admin'])->name('tickets.admin');
Route::get('/booking/{trip}/conductorview',[TicketController::class,'conductor'])->name('tickets.conductor');

Route::get('/incident',[IncidentController::class,'index'])->name('incident.index');
Route::get('/incident/{trip}/add',[IncidentController::class,'add'])->name('incident.add');
Route::put('/incident/store',[IncidentController::class,'store'])->name('incident.store');


Route::get('/dashcam',[DashcamController::class,'index'])->name('dashcam.index');
Route::get('/dashcam/{trip}/add',[DashcamController::class,'add'])->name('dashcam.add');
Route::put('/dashcam/store',[DashcamController::class,'store'])->name('dashcam.store');





Route::get('/login', function () {
    return view('dashboard');
})->name('login.index');

require __DIR__.'/auth.php';
Route::get('/',[SearchController::class,'index'])->name('publicview');


// End ///

Route::get('/dashboard/conductor', function () {
    return view('conductor-account.conductor_page');
});

// Routes for Register
Route::get('/create-account', function () {
    return view('admin-account.create_acc');
})->name('create_acc');

Route::get('/dashboard/register-conductor', function () {
    return view('conductor-account.register_conductor');
})->name('conductor.reg');

// End






///////////////////////////old not mine


Route::get('/howtobook', function () {
    return view('howtobook');
})->name('howtobook');

Route::get('/aboutus', function () {
    return view('about_us');
})->name('aboutus');

Route::get('/conductor-page', function () {
    return view('conductor-account.conductor_page');
})->name('conductor_page');

Route::get('/check-food', function () {
    return view('conductor-account.check_food');
})->name('check_food');

Route::get('/check-food-two', function () {
    return view('conductor-account.check_food_two');
})->name('check_food_two');

Route::get('/report-incident', function () {
    return view('conductor-account.report_incident');
})->name('report_incident');

Route::get('/manual-override', function () {
    return view('conductor-account.manual_override');
})->name('manual_override');

Route::get('/confirm-bus-arrival', function () {
    return view('conductor-account.confirm_ba');
})->name('confirm_ba');





Route::get('/dltb_bus', function () {
    return view('dltb_bus');
})->name('dltb_bus');

Route::get('/jam_bus', function () {
    return view('jam_bus');
})->name('jam_bus');

Route::get('/victory_bus', function () {
    return view('victory_bus');
})->name('victory_bus');

Route::get('/admin-page', function () {
    return view('admin-account.admin_page');
})->name('admin-page');


Route::get('/admin/incident_report', function () {
    return view('admin-account.incident_report');
})->name('admin.incident_report');


Route::get('/admin/ir_two', function () {
    return view('admin-account.ir_two');
})->name('admin.ir_two');


Route::get('/admin/rating_and_feedback', function () {
    return view('admin-account.rating_and_feedback');
})->name('admin.rating_and_feedback');


Route::get('/admin/bus-arrival', function () {
    return view('admin-account.bus-arrival');
})->name('admin.bus-arrival');


Route::get('/admin/ba_two', function () {
    return view('admin-account.ba_two');
})->name('admin.ba_two');


Route::get('/admin/dashcam', function () {
    return view('admin-account.dashcam');
})->name('admin.dashcam');


Route::get('/admin/sales-report', function () {
    return view('admin-account.sales_report');
})->name('admin.sales-report');

Route::get('/admin/approve-conductor', function () {
    return view('admin-account.approve_conductor');
})->name('admin.approve-conductor');

Route::get('/user/logged-in', function () {
    return view('user-account.user_logged_in');
})->name('user.logged_in');

Route::get('/user/booking-page', function () {
    return view('user-account.booking_page');
})->name('user.booking-page');

Route::get('/user/logged-in-bp', function () {
    return view('user-account.logged_in_bp');
})->name('user.logged-in-bp');

Route::get('/user/refund-page', function () {
    return view('user-account.refund_page');
})->name('user.refund-page');

Route::get('/user/bp-two', function () {
    return view('user-account.logged_in_bp_two');
})->name('user.bp-two');

Route::get('/user/bp-three', function () {
    return view('user-account.logged_in_bp_three');
})->name('user.bp-three');

Route::get('/user/bp-four', function () {
    return view('user-account.logged_in_bp_four');
})->name('user.bp-four');

Route::get('/user/bp-five', function () {
    return view('user-account.logged_in_bp_five');
})->name('user.bp-five');

Route::get('/user/notif-two', function () {
    return view('user-account.notif_two');
})->name('user.notif-two');

Route::get('/user/orderfood-hamburger-jb', function () {
    return view('user-account.orderfood.order_hamburger_jb');
})->name('user.order_hamburger_jb');

Route::get('/user/orderfood-coffee-jb', function () {
    return view('user-account.orderfood.order_coffee_jb');
})->name('user.order_coffee_jb');

Route::get('/user/orderfood-dessert-jb', function () {
    return view('user-account.orderfood.order_dessert_jb');
})->name('user.order_dessert_jb');

Route::get('/user/orderfood-drinks-jb', function () {
    return view('user-account.orderfood.order_drinks_jb');
})->name('user.order_drinks_jb');

Route::get('/user/orderfood-meal-jb', function () {
    return view('user-account.orderfood.orderfood_meal_jb');
})->name('user.order_meal_jb');

Route::get('/user/orderfood/viewpage', function () {
    return view('user-account.orderfood.view_page');
})->name('user.viewpage');



Route::get('/user/payment-confirmed', function () {
    return view('user-account.payment_confirmed');
})->name('user.payment-confirmed');




