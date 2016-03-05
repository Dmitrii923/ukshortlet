<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\TransanctionContorller;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\PartscategoryController;
use App\Http\Controllers\Featureservicecontorller;
use App\Http\Controllers\Alertcontroller;
use App\Http\Controllers\Adminnewcontroller;


use App\Http\Controllers\Frontcontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/sendemail',[Frontcontroller::class,'sendemail']);

Route::get('/sendsms', [Frontcontroller::class, 'sendsms']);
Route::get('/emailads', [Frontcontroller::class, 'emailads']);

Route::post('/reviewpost', [Frontcontroller::class, 'reviewpost']);
Route::post('/emailadpost', [Frontcontroller::class, 'emailadpost']);




Route::get('/verification/{encode}', [Frontcontroller::class, 'verification']);
Route::get('/verifysuccess', [Frontcontroller::class, 'verifysuccess']);


Route::get('/contact',[Frontcontroller::class,'contact']);
Route::get('/buytools',[Frontcontroller::class,'buytools']);

Route::get('/toolbuy/{toolid?}',[Frontcontroller::class,'toolbuy']);
Route::get('/addfav/{propertyid?}',[Frontcontroller::class,'addfav']);


Route::get('/terms-conditions',[Frontcontroller::class,'termscondition']);
Route::get('/privacy-policy',[Frontcontroller::class,'privacypolicy']);
Route::get('/cookie-policy',[Frontcontroller::class,'cookie']);
Route::get('/advertise-your-service',[Frontcontroller::class,'advertise']);



	// Front route //
Route::get('/',[Frontcontroller::class,'home'])->name('home');
Route::get('/createowneraccount',[Frontcontroller::class,'createowneraccount']);
Route::get('/securelogin',[Frontcontroller::class,'securelogin']);
Route::get('/pages/{slug?}',[Frontcontroller::class,'cmspg']);

Route::post('/creteaccountsubmit',[Frontcontroller::class,'creteaccountsubmit']);
Route::post('/quicksearch',[Frontcontroller::class,'quicksearch']);

Route::get('/getcityfeatures/{city_id}',[Frontcontroller::class,'getCityFeatures']);

Route::get('/adcost',[Frontcontroller::class,'adcost']);
Route::get('/travelleralert',[Frontcontroller::class,'travelleralert']);
Route::post('/travelleralertsubmit',[Frontcontroller::class,'travelleralertsubmit']);


Route::get('/property/city/{cityid}',[Frontcontroller::class,'citywiseproperty']);
Route::get('/property/ptype/{ptypeid}',[Frontcontroller::class,'ptypewisecity']);
Route::get('/property/details/{propid}',[Frontcontroller::class,'propdetails']);
Route::get('/news',[Frontcontroller::class,'news']);
Route::get('/news/{id}',[Frontcontroller::class,'newsdetails']);


Route::get('admin/approvereview/{id?}',[Adminnewcontroller::class,'approvereview']);
Route::get('admin/pendingreview/{id?}',[Adminnewcontroller::class,'pendingreview']);




Route::get('admin/propertylist',[Adminnewcontroller::class,'propertylist']);
Route::get('admin/reviewlist',[Adminnewcontroller::class,'reviewlist']);
Route::get('admin/propertyadd',[Adminnewcontroller::class,'propertyadd']);
Route::get('admin/propertyedit/{id}',[Adminnewcontroller::class,'propertyedit']);
Route::post('admin/propertyadsave',[Adminnewcontroller::class,'propertyadsave']);
Route::get('admin/propertyarchive/{id?}',[Adminnewcontroller::class,'propertyarchive']);
Route::get('admin/propertypublish/{id?}',[Adminnewcontroller::class,'propertypublish']);


Route::post('admin/propertyadupdate/{id}',[Adminnewcontroller::class,'propertyadupdate']);
Route::get('admin/propertydel/{id}',[Adminnewcontroller::class,'propertydel']);

// news list //
Route::get('admin/newslist',[Adminnewcontroller::class,'newslist']);
Route::get('admin/newsadd',[Adminnewcontroller::class,'newsadd']);
Route::post('admin/newsave',[Adminnewcontroller::class,'newsave']);
Route::get('admin/newsedit/{id}',[Adminnewcontroller::class,'newsedit']);
Route::post('admin/newsupdate/{id}',[Adminnewcontroller::class,'newsupdate']);
Route::get('admin/newsdel/{id}',[Adminnewcontroller::class,'newsdel']);

Route::get('admin/favlist',[Adminnewcontroller::class,'favlist']);
Route::get('admin/profile',[Adminnewcontroller::class,'profile']);
Route::post('admin/profileupdate',[Adminnewcontroller::class,'profileupdate']);

// user list //

Route::get('admin/userlist',[Adminnewcontroller::class,'userlist']);
Route::get('admin/buytoollist',[Adminnewcontroller::class,'buytoollist']);
Route::get('admin/buyerlist',[Adminnewcontroller::class,'buyerlist']);

   // Admin route //

// new functions//
Route::get('admin/fserviceproviderlist',[Featureservicecontorller::class,'list']);
Route::get('admin/fserviceprovideradd',[Featureservicecontorller::class,'add']);
Route::get('admin/fserviceprovideredit/{id}',[Featureservicecontorller::class,'edit']);
Route::get('admin/fserviceproviderdel/{id}',[Featureservicecontorller::class,'del']);
Route::post('admin/fserviceproviderstore',[Featureservicecontorller::class,'store']);
Route::post('admin/fserviceproviderupdate/{id}',[Featureservicecontorller::class,'update']);


//property owners //
Route::get('admin/citylist',[Adminnewcontroller::class,'citylist'])->name('citylist');
Route::get('admin/cityadd',[Adminnewcontroller::class,'cityadd']);
Route::get('admin/cityedit/{id}',[Adminnewcontroller::class,'cityedit']);
Route::post('admin/cityupdate/{id}',[Adminnewcontroller::class,'cityupdate']);
Route::post('admin/citystore',[Adminnewcontroller::class,'citystore']);
Route::get('admin/citydel/{id}',[Adminnewcontroller::class,'citydel']);






Route::get('admin/propertyownerslist',[Adminnewcontroller::class,'propertyownerslist'])->name('propertyownerslist');
Route::get('admin/powneractive/{id}',[Adminnewcontroller::class,'powneractive']);
Route::get('admin/pownerinactive/{id}',[Adminnewcontroller::class,'pownerinactive']);

Route::get('admin/verifyowner/{id}',[Adminnewcontroller::class,'verifyowner']);
Route::get('admin/unverifyowner/{id}',[Adminnewcontroller::class,'unverifyowner']);

Route::get('admin/userlive/{id}',[Adminnewcontroller::class,'userlive']);
Route::get('admin/userdraft/{id}',[Adminnewcontroller::class,'userdraft']);

Route::get('admin/userdelete', [Adminnewcontroller::class, 'setUserDeleteStatus']);




Route::get('admin/adcostlist',[Adminnewcontroller::class,'adcostlist'])->name('adcostlist');
Route::get('admin/adcostadd',[Adminnewcontroller::class,'adcostadd']);
Route::get('admin/adcostedit/{id}',[Adminnewcontroller::class,'adcostedit']);
Route::post('admin/adcoststore',[Adminnewcontroller::class,'adcoststore']);
Route::get('admin/adcostdel/{id}',[Adminnewcontroller::class,'adcostdel']);
Route::post('admin/adcostupdate/{id}',[Adminnewcontroller::class,'adcostupdate']);

// alert service //
Route::get('admin/alertlist',[Alertcontroller::class,'list']);
Route::get('admin/dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::post('custom-securelogin', [CustomAuthController::class, 'secureloginpost'])->name('securelogin.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// car type //
Route::get('admin/cartypes',[CarTypeController::class,'index'])->name('cartypes');
Route::get('admin/cartypeadd',[CarTypeController::class,'create'])->name('cartypeadd');
Route::get('admin/cartypeedit/{id?}',[CarTypeController::class,'edit']);
Route::post('cartypes.store',[CarTypeController::class,'store'])->name('cartypestore');
Route::post('cartypeupdate/{id}',[CarTypeController::class,'update'])->name('cartypeupdate');
Route::get('admin/cartypedelete/{id}',[CarTypeController::class,'destroy']);



// car master //
Route::get('admin/vehicles',[VehicleController::class,'index']);
Route::get('admin/vehicleadd',[VehicleController::class,'create']);
Route::get('admin/vehicleedit/{id}',[VehicleController::class,'edit']);
Route::post('admin/vehicleupdate/{id}',[VehicleController::class,'update']);
Route::post('admin/vehiclestore',[VehicleController::class,'store'])->name('vehiclestore');
Route::get('admin/vehicledelete/{id}',[VehicleController::class,'destroy']);

//Group //
Route::get('admin/groups',[GroupController::class,'index']);
Route::get('admin/groupadd',[GroupController::class,'create']);
Route::post('admin/groupsave',[GroupController::class,'store']);
Route::get('admin/groupedit/{id}',[GroupController::class,'edit']);
Route::post('admin/groupupdate/{id}',[GroupController::class,'update']);
Route::get('admin/groupdelete/{id}',[GroupController::class,'destroy']);


// transanction head //
Route::get('admin/incomeheads',[TransanctionContorller::class,'index']);
Route::get('admin/incomeheadadd',[TransanctionContorller::class,'incomeheadadd']);
Route::post('admin/transanctionsave',[TransanctionContorller::class,'transanctionsave']);
Route::get('admin/headedit/{id}',[TransanctionContorller::class,'headedit']);
Route::post('admin/headupdate/{id}',[TransanctionContorller::class,'update']);
Route::get('admin/headdel/{id}',[TransanctionContorller::class,'destroy']);

Route::get('admin/expenseheds',[TransanctionContorller::class,'expenseheds']);
Route::get('admin/expensehedadd',[TransanctionContorller::class,'expensehedadd']);

// income //
Route::get('admin/incomelist',[IncomeController::class,'index']);
Route::get('admin/incomeadd',[IncomeController::class,'incomeadd']);
Route::post('admin/incomesave',[IncomeController::class,'incomesave']);
Route::get('admin/incomeedit/{id}',[IncomeController::class,'incomeedit']);
Route::post('admin/incomeupdate/{id}',[IncomeController::class,'incomeupdate']);
Route::get('admin/incomedelete/{id}',[IncomeController::class,'destroy']);

// expenditure //


Route::get('admin/expenditurelist',[ExpenditureController::class,'expenditurelist']);
Route::get('admin/expenditureadd',[ExpenditureController::class,'expenditureadd']);
Route::post('admin/expendituresave',[ExpenditureController::class,'expendituresave']);
Route::get('admin/expendituredit/{id}',[ExpenditureController::class,'expendituredit']);
Route::post('admin/expenditureupdate/{id}',[ExpenditureController::class,'expenditureupdate']);
Route::get('admin/expendituredelete/{id}',[ExpenditureController::class,'destroy']);

// parts categorry //


Route::get('admin/partcatlist',[PartscategoryController::class,'partcatlist']);
Route::get('admin/partcatadd',[PartscategoryController::class,'partcatadd']);
Route::post('admin/partsacatsave',[PartscategoryController::class,'partsacatsave']);


//fuel //
Route::get('admin/fuellist',[FuelController::class,'index']);
Route::get('admin/fueladd',[FuelController::class,'create']);
Route::post('admin/fuelsave',[FuelController::class,'store']);
Route::get('admin/fueledit/{id}',[FuelController::class,'edit']);
Route::post('admin/fuelupdate/{id}',[FuelController::class,'update']);
Route::get('admin/fueldelete/{id}',[FuelController::class,'destroy']);

Route::get('paypal',[Frontcontroller::class,'paypal_save'])->name('paypal');
Route::get('cancel-return',[Frontcontroller::class,'paypal_cancel'])->name('cancel_return');


Route::get('toolbuysuccess',[Frontcontroller::class,'tooldatasave'])->name('toolbuysuccess');
Route::get('toolbuycancel',[Frontcontroller::class,'toolbuycancel'])->name('toolbuycancel');



















