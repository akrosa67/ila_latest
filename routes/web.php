<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\PersonalFamily;
use App\Http\Controllers\Frontend\CorporateLaw;
use App\Http\Controllers\Frontend\CriminalProperty;
use App\Http\Controllers\Frontend\Family;
use App\Http\Controllers\Frontend\CivilDebt;
use App\Http\Controllers\Frontend\CivilLaw;
use App\Http\Controllers\Frontend\Paralegal;
use App\Http\Controllers\Frontend\Documentation;
use App\Http\Controllers\Frontend\LegalNotice;
use App\Http\Controllers\Frontend\OtherServices;
use App\Http\Controllers\FirebaseController;


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

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/services', function () {
//     return view('services');
// });
Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
});


Route::group(['prefix'=>'user','middleware'=>'auth'],function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
});


Route::prefix('personal-family')->group(function(){
    Route::get('divorce',[PersonalFamily::class,'divorce'])->name('perosnalfamily.divorce');
    Route::get('family-dispute',[PersonalFamily::class,'familydispute'])->name('perosnalfamily.familydispute');
    Route::get('child-custody',[PersonalFamily::class,'childcustody'])->name('perosnalfamily.childcustody');
    Route::get('muslim-law',[PersonalFamily::class,'muslimlaw'])->name('perosnalfamily.muslimlaw');
    Route::get('medical-negligence',[PersonalFamily::class,'medicalnegligence'])->name('perosnalfamily.medicalnegligence');
    Route::get('motor-accident',[PersonalFamily::class,'motoraccident'])->name('perosnalfamily.motoraccident');
    Route::get('wills-trust',[PersonalFamily::class,'willstrust'])->name('perosnalfamily.willstrust');
    Route::get('labour-services',[PersonalFamily::class,'labourservices'])->name('perosnalfamily.labourservices');
});
Route::prefix('croporate-law')->group(function(){
    Route::get('arbiration',[CorporateLaw::class,'arbiration'])->name('croporatelaw.arbiration');
    Route::get('banking-finance',[CorporateLaw::class,'bankingfinance'])->name('croporatelaw.bankingfinance');
    Route::get('croporate',[CorporateLaw::class,'croporate'])->name('croporatelaw.croporate');
    Route::get('customcentralexcercise',[CorporateLaw::class,'customcentralexcercise'])->name('croporatelaw.customcentralexcercise');
    Route::get('gst',[CorporateLaw::class,'gst'])->name('croporatelaw.gst');
    Route::get('startup',[CorporateLaw::class,'startup'])->name('croporatelaw.startup');
    Route::get('employee-insurance',[CorporateLaw::class,'employeeinsurance'])->name('croporatelaw.employeeinsurance');
    Route::get('tradecopyrights',[CorporateLaw::class,'tradecopyrights'])->name('croporatelaw.tradecopyrights');
});
Route::prefix('criminal-property')->group(function(){
    Route::get('criminal',[CriminalProperty::class,'criminal'])->name('criminalproperty.criminal');
    Route::get('cybercrime',[CriminalProperty::class,'cybercrime'])->name('criminalproperty.cybercrime');
    Route::get('landlord-tenant',[CriminalProperty::class,'landlordtenant'])->name('criminalproperty.landlordtenant');
    Route::get('property',[CriminalProperty::class,'property'])->name('criminalproperty.property');
    
});
Route::prefix('civil-debt-matters')->group(function(){
    Route::get('chequebounce',[CivilDebt::class,'chequebounce'])->name('civildebt.chequebounce');
    Route::get('civil',[CivilDebt::class,'civil'])->name('civildebt.civil');
    Route::get('consumer-court',[CivilDebt::class,'consumercourt'])->name('civildebt.consumercourt');
    Route::get('documentation',[CivilDebt::class,'documentation'])->name('civildebt.documentation');
    Route::get('recovery',[CivilDebt::class,'recovery'])->name('civildebt.recovery');
});
 
Route::prefix('family')->group(function(){
    Route::get('mutual-divorce',[Family::class,'mutualdivorce'])->name('family.mutualdivorce');
    Route::get('marriage-registration',[Family::class,'marriageregistration'])->name('family.marriageregistration');
    Route::get('court-marriage',[Family::class,'courtmarriage'])->name('family.courtmarriage');
    Route::get('divorce-notice',[Family::class,'divorcenotice'])->name('family.divorcenotice');
    Route::get('marriage-counselling',[Family::class,'marriagecounselling'])->name('family.marriagecounselling');
    Route::get('will-drafting',[Family::class,'willdrafting'])->name('family.willdrafting');

});

Route::prefix('civillaw')->group(function(){
    Route::get('succession-certificate',[CivilLaw::class,'successioncertificate'])->name('civillaw.successioncertificate');
    Route::get('property-verification',[CivilLaw::class,'propertyverification'])->name('civillaw.propertyverification');
    Route::get('property-registration',[CivilLaw::class,'propertyregistration'])->name('civillaw.propertyregistration');
    Route::get('gift-deed-drafting',[CivilLaw::class,'giftdeeddrafting'])->name('civillaw.giftdeeddrafting');
    Route::get('lease-agreement-drafting',[CivilLaw::class,'leaseagreementdrafting'])->name('civillaw.leaseagreementdrafting');
    Route::get('lease-registration',[CivilLaw::class,'leaseregistration'])->name('civillaw.leaseregistration');
});

Route::prefix('documentation')->group(function(){
    Route::get('mou',[Documentation::class,'mou'])->name('documentation.mou');
    Route::get('namechange',[Documentation::class,'namechange'])->name('documentation.namechange');
    Route::get('sale-deed-registration',[Documentation::class,'saledeedregistration'])->name('documentation.saledeedregistration');
    Route::get('will-registration',[Documentation::class,'willregistration'])->name('documentation.willregistration');
    Route::get('power-of-attorney',[Documentation::class,'powerofattorney'])->name('documentation.powerofattorney');
});

Route::prefix('legal-notice')->group(function(){
    Route::get('divorce-notice',[LegalNotice::class,'divorcenotice'])->name('legalnotice.divorcenotice');
    Route::get('tenant-eviction-notice',[LegalNotice::class,'tenantevictionnotice'])->name('legalnotice.tenantevictionnotice');
    Route::get('refund-of-security-notice',[LegalNotice::class,'refundofsecuritynotice'])->name('legalnotice.refundofsecuritynotice');
    Route::get('faulty-product-notice',[LegalNotice::class,'faultyproductnotice'])->name('legalnotice.faultyproductnotice');
    Route::get('cheque-bounce-notice',[LegalNotice::class,'chequebouncenotice'])->name('legalnotice.chequebouncenotice');
    Route::get('recovery-notice-of-dues',[LegalNotice::class,'recoverynoticeofdues'])->name('legalnotice.recoverynoticeofdues');
});

Route::get('legal-forms',function(){
    return view('otherservices.legalform');
})->name('legalforms');

Route::get('/paralegal-services', [Paralegal::class,'index'])->name('paralegal.index');
Route::get('firebase-phone-authentication', [FirebaseController::class, 'index']);


Route::get('other-services',[OtherServices::class,'index'])->name('otherservices');