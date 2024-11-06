<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DigitalCollectionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MemberController;

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



/*PUBLIC*****************************************************************************************************************/

//Route::get('/', function () {  return view('welcome'); });
Route::get('/lang/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->name('lang.switch');


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our_team');
Route::get('/open-positions', [HomeController::class, 'openPositions'])->name('open_positions');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact_us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/certification-program', [HomeController::class, 'certificationProgram'])->name('certification_program');
Route::get('/request-certification', [HomeController::class, 'requestCertification'])->name('request_certification');
Route::get('/certified-institutions', [HomeController::class, 'certifiedInstitutions'])->name('certified_institutions');
Route::get('/memberships', [HomeController::class, 'memberships'])->name('memberships');
Route::get('/programs', [HomeController::class, 'programs'])->name('programs');
Route::get('/antioquia', [HomeController::class, 'antioquia'])->name('antioquia');
Route::get('/resource-center', [HomeController::class, 'resourceCenter'])->name('resource_center');
Route::get('/compelling-preaching', [HomeController::class, 'compellingPreaching'])->name('compelling_preaching');
Route::get('/bookstore', [HomeController::class, 'bookstore'])->name('bookstore');
Route::get('/donations', [HomeController::class, 'donations'])->name('donations');
Route::get('/aeth-fund', [HomeController::class, 'aethFund'])->name('aeth_fund');
Route::get('/gonzalez-center', [HomeController::class, 'gonzalezCenter'])->name('gonzalez_center');
Route::post('/members', [MemberController::class, 'store'])->name('members.store');



/**********************************************  Payments */
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::get('/payment-membership', [PaymentController::class, 'showMembershipPaymentForm'])->name('payment-membership');
Route::post('/payment', [PaymentController::class, 'membershipRedirectPayment'])->name('membershipRedirectPayment');
Route::post('/payment-donation', [PaymentController::class, 'donationRedirectPayment'])->name('donationRedirectPayment');

Route::post('/payment-redirect', [PaymentController::class, 'handleRedirect'])->name('payment.redirect');
Route::get('/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');
Route::post('/handle-payment', [PaymentController::class, 'handlePayment']);
Route::post('/handleMembershipPayment', [PaymentController::class, 'handleMembershipPayment']);



/* AUTH ******************************************************************************************************************/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/video-gallery', [AdminController::class, 'videoGallery'])->name('videoGallery');
    Route::get('/gonzalez-acervo', [DigitalCollectionController::class, 'acervo'])->name('acervo');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
