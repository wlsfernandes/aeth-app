<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DigitalCollectionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\CapacityBuildingController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\PayPalController;
use App\Services\UPSService;





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

Route::get('/profile/force-update-password/{token}', function ($token) {
    $email = request('email'); // Get email from query string
    return view('auth.force-update-password', ['token' => $token, 'email' => $email]);
})->name('profile.update');

Route::post('/force-update-password', [ProfileController::class, 'forceUpdatePassword'])->name('force-update-password.update');


Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/calculate-shipping/{zip}', [ShippingController::class, 'calculateShippingCost']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our_team');
Route::get('/open-positions', [HomeController::class, 'openPositions'])->name('open_positions');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contactUs'])->name('contact_us');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/certification-program', [HomeController::class, 'certificationProgram'])->name('certification_program');
Route::get('/request-certification', [HomeController::class, 'requestCertification'])->name('requestCertification');
Route::get('/certified-institutions', [HomeController::class, 'certifiedInstitutions'])->name('certified_institutions');
Route::get('/memberships', [HomeController::class, 'memberships'])->name('memberships');
Route::get('/antioquia', [HomeController::class, 'antioquia'])->name('antioquia');
Route::get('/resource-center', [HomeController::class, 'resourceCenter'])->name('resource_center');
Route::get('/young-leaders', [HomeController::class, 'youngLeaders'])->name('young-leaders');
Route::get('/compelling-preaching', [HomeController::class, 'compellingPreaching'])->name('compelling_preaching');
Route::get('/lecture-series-2025', [HomeController::class, 'lectureSeries2025'])->name('lectureSeries2025');
Route::get('/help-desk', [HomeController::class, 'helpDesk'])->name('helpDesk');


Route::get('/donations', [HomeController::class, 'donations'])->name('donations');
Route::get('/aeth-fund', [HomeController::class, 'aethFund'])->name('aeth_fund');
Route::get('/gonzalez-center', [HomeController::class, 'gonzalezCenter'])->name('gonzalez_center');
Route::post('/members', [HomeController::class, 'store'])->name('members.store');
Route::get('/capacity-building', [HomeController::class, 'capacityBuilding'])->name('capacityBuilding');
Route::get('/capacity-building/application', [CapacityBuildingController::class, 'application'])->name('application');
Route::get('/web-application', [HomeController::class, 'webApplication'])->name('webApplication');

Route::get('/jessica-lugo', [TeamController::class, 'jessicaLugo'])->name('jessica-lugo');
Route::get('/oscar-merlo', [TeamController::class, 'oscarMerlo'])->name('oscar-merlo');
Route::get('/glorie-acevedo', [TeamController::class, 'glorieAcevedo'])->name('glorie-acevedo');
Route::get('/marta-luna', [TeamController::class, 'martaLuna'])->name('marta-luna');
Route::get('/luz-ortiz', [TeamController::class, 'luzOrtiz'])->name('luz-ortiz');
Route::get('/ondina-gonzalez', [TeamController::class, 'ondinaGonzalez'])->name('ondina-gonzalez');
Route::get('/wilson-fernandes-junior', [TeamController::class, 'wilsonFernandes'])->name('wilson-fernandes-junior');
Route::get('/shaila-munoz', [TeamController::class, 'shailaMunoz'])->name('shaila-munoz');
Route::get('/coralys-santos', [TeamController::class, 'coralysSantos'])->name('coralys-santos');
Route::get('/sophia-porter', [TeamController::class, 'sophiaPorter'])->name('sophia-porter');
Route::get('/jeremy-villoch', [TeamController::class, 'jeremyVilloch'])->name('jeremy-villoch');
Route::get('/yaheli-vargas', [TeamController::class, 'yaheliVargas'])->name('yaheli-vargas');
Route::get('/maylin-escala', [TeamController::class, 'maylinEscala'])->name('maylin-escala');
Route::get('/yajaira-ruiz', [TeamController::class, 'yajairaRuiz'])->name('yajaira-ruiz');
Route::get('/juan-martinez', [TeamController::class, 'juanMartinez'])->name('juan-martinez');

Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/events', [PostController::class, 'showAllEvents'])->name('showAllEvents');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/certification', [CertificationController::class, 'generateImage'])->name('certification');
Route::get('/renew', [MemberController::class, 'renew'])->name('renew');




/**********************************************  Members **********************************************/

Route::get('/payment-membership', [MemberController::class, 'showMembershipPaymentForm'])->name('payment-membership');
Route::post('/renew-payment', [MemberController::class, 'membershipRedirectRenewPayment'])->name('membershipRedirectRenewPayment');
Route::post('/member-payment', [MemberController::class, 'membershipRedirectPayment'])->name('membershipRedirectPayment');

/***************************************** BOOKSTORE ************************************************/
Route::get('/bookstore', [ProductController::class, 'bookstore'])->name('bookstore');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.details');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/update-cart', [CartController::class, 'updateCart']);
Route::post('/update-cart-total', [CartController::class, 'updateCartTotal'])->name('updateCartTotal');
Route::post('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');



/**********************************************  Payments **********************************************/
Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.show');
Route::post('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment');
Route::post('/handleMembershipPayment', [PaymentController::class, 'handleMembershipPayment']);
Route::post('/redirectCreditPayment', [PaymentController::class, 'redirectCreditPayment'])->name('redirectCreditPayment');
Route::post('/redirectPaypalPayment', [PaymentController::class, 'redirectPaypalPayment'])->name('redirectPaypalPayment');
Route::post('/redirectContactPayment', [PaymentController::class, 'redirectContactPayment'])->name('redirectContactPayment');
Route::post('/cartPayment', [PaymentController::class, 'cartPayment'])->name('cartPayment');
Route::post('/handleMembershipRenewPayment', [PaymentController::class, 'handleMembershipRenewPayment']);
Route::match(['get', 'post'], '/payment-donation', [PaymentController::class, 'donationRedirectPayment'])->name('donationRedirectPayment');
Route::post('/payment-redirect', [PaymentController::class, 'handleRedirect'])->name('payment.redirect');
Route::get('/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');
Route::post('/handle-payment', [PaymentController::class, 'handleDonation']);

Route::post('/paypal/membership', [PayPalController::class, 'membership'])->name('paypal.membership');
Route::get('/paypal/capture/membership/success', [PayPalController::class, 'handleMembershipPayPalSuccess'])->name('paypal.capture.membership.success');


Route::post('/paypal/donate', [PayPalController::class, 'donate'])->name('paypal.donate');
Route::get('/paypal/capture/donation', [PayPalController::class, 'captureDonationPayment'])->name('paypal.capture.donation');

Route::post('/paypal/bookstore', [PayPalController::class, 'createBookstorePayment'])->name('paypal.payment');
Route::get('paypal/capture', [PayPalController::class, 'capturePayment'])->name('paypal.capture');

Route::get('payment/success', function () {
    return view('paypal.payment-success');
})->name('success');
Route::get('payment/error', function () {
    return view('paypal.payment-failed');
})->name('error');
Route::get('test/paypal', function () {
    return view('paypal.test-paypal');
})->name('test.paypal');



/* AUTH ******************************************************************************************************************/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::put('/member/{id}', [MemberController::class, 'update'])->name('members.update');

    Route::get('/view-content/{id}', [AdminController::class, 'showContent'])->name('view-content');
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::get('/programs', [AdminController::class, 'programs'])->name('programs');
    Route::get('/findByEvent', [AdminController::class, 'findByEvent'])->name('findByEvent');

    Route::get('/aeth-events', [AdminController::class, 'aethEvents'])->name('aethEvents');
    Route::get('/assemblies', [AdminController::class, 'assemblies'])->name('assemblies');
    Route::get('/conversatorios', [AdminController::class, 'conversatorios'])->name('conversatorios');
    Route::get('/lectures', [AdminController::class, 'lectures'])->name('lectures');
    Route::get('/elet', [AdminController::class, 'elet'])->name('elet');
    Route::get('/articles', [AdminController::class, 'articles'])->name('articles');
    Route::get('/bibles-studies', [AdminController::class, 'bibleStudies'])->name('bibleStudies');
    Route::get('/conference', [AdminController::class, 'conference'])->name('conference');
    Route::get('/sermons', [AdminController::class, 'sermons'])->name('sermons');
    Route::get('/workshops', [AdminController::class, 'workshops'])->name('workshops');
    Route::get('/others', [AdminController::class, 'others'])->name('others');

    Route::get('/aeth-program', [AdminController::class, 'aethProgram'])->name('aethProgram');
    Route::get('/antioquia-exclusive', [AdminController::class, 'antioquiaExclusive'])->name('antioquiaExclusive');
    Route::get('/capacity-building-exclusive', [AdminController::class, 'capacityBuildingExclusive'])->name('capacityBuildingExclusive');
    Route::get('/compelling-preaching-exclusive', [AdminController::class, 'compellingPreachingExclusive'])->name('compellingPreachingExclusive');
    Route::get('/gonzalez-exclusive', [AdminController::class, 'gonzalezExclusive'])->name('gonzalezExclusive');
    Route::get('/young-lideres-exclusive', [AdminController::class, 'youngLideresExclusive'])->name('youngLideresExclusive');


    Route::get('/gonzalez-acervo', [DigitalCollectionController::class, 'acervo'])->name('acervo');



});



require __DIR__ . '/auth.php';
