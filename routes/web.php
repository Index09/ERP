<?php


use Illuminate\Support\Facades\Route;
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


Route::get('call', function () {
  
    event(new App\Events\test('hello','AASSDD'));
    return;
  
});


//Testing Route



Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'perform'])->name('logout.perform');
    Route::post('/addcash', [App\Http\Controllers\HomeController::class, 'addcash'])->name('addcash');
    Route::get('/getpackagesetting', [App\Http\Controllers\HomeController::class, 'getpackagesetting'])->name('getpackagesetting');
    Route::get('/packageexpired', function(){return view('package.expired');});

 });
 


 






//Customers

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('create');
Route::post('/customer_create', [App\Http\Controllers\CustomerController::class, 'customer_create'])->name('customer_create');
Route::post('/getcustomer',[App\Http\Controllers\CustomerController::class, 'getcustomer'])->name('getcustomer');
Route::get('/customeraccouning',[App\Http\Controllers\CustomerController::class, 'customeraccouning'])->name('customeraccouning');
Route::get('/getcustomerpayments/{id}',[App\Http\Controllers\CustomerController::class, 'getcustomerpayments'])->name('getcustomerpayments');
Route::get('/customers',[App\Http\Controllers\CustomerController::class, 'view'])->name('view');
Route::get('/getcustomers',[App\Http\Controllers\CustomerController::class, 'customers'])->name('customers');
Route::post('/customer_delete', [App\Http\Controllers\CustomerController::class, 'delete'])->name('delete');
Route::post('/customer_update', [App\Http\Controllers\CustomerController::class, 'update'])->name('update');




Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'create'])->name('create');
Route::post('/supplier_create', [App\Http\Controllers\SupplierController::class, 'supplier_create'])->name('supplier_create');




// Sell order 


Route::post('/sellorder_create', [App\Http\Controllers\SellorderController::class, 'sellorder_create'])->name('sellorder_create');
Route::post('/sellorderwapy_create', [App\Http\Controllers\SellorderController::class, 'sellorderwapy_create'])->name('sellorderwapy_create');
Route::get('/sellorder', [App\Http\Controllers\SellorderController::class, 'index'])->name('index');
Route::get('/sellorderwpay', [App\Http\Controllers\SellorderController::class, 'indexwpay'])->name('indexwpay');
Route::get('/getsellorders/{id}', [App\Http\Controllers\SellorderController::class, 'getsellorders'])->name('getsellorders');
Route::get('/getsellorders', [App\Http\Controllers\SellorderController::class, 'get'])->name('get');
Route::get('/getmonthsells', [App\Http\Controllers\SellorderController::class, 'getmonthsells'])->name('getmonthsells');
Route::get('/sellorders', [App\Http\Controllers\SellorderController::class, 'view'])->name('view');
Route::post('sellordergetcash',[App\Http\Controllers\SellorderController::class, 'sellordergetcash'])->name('sellordergetcash');

// --> Print

Route::get('/sellorder/{id}', [App\Http\Controllers\SellorderController::class, 'print'])->name('print');




// Invintory 

Route::get('/invintory', [App\Http\Controllers\InvintoryController::class, 'create'])->name('create');
Route::post('/invintory', [App\Http\Controllers\InvintoryController::class, 'insert'])->name('insert');
Route::get('/invintoriesview', [App\Http\Controllers\InvintoryController::class, 'invintoriesview'])->name('invintoriesview');
Route::get('/getinvintories', [App\Http\Controllers\InvintoryController::class, 'getinvintories'])->name('getinvintories');
Route::post('/invintory_delete', [App\Http\Controllers\InvintoryController::class, 'invintory_delete'])->name('invintory_delete');


// Product

Route::get('/product', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::get('/productsview', [App\Http\Controllers\ProductController::class, 'productsview'])->name('productsview');
Route::post('/product', [App\Http\Controllers\ProductController::class, 'insert'])->name('insert');
Route::get('/getproducts', [App\Http\Controllers\ProductController::class, 'getproducts'])->name('getproducts');
Route::post('/product_delete', [App\Http\Controllers\ProductController::class, 'product_delete'])->name('product_delete');


//payment 


Route::post('/payment_pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');








//advertiser


Route::post('/dashbord/advertiser_create', [App\Http\Controllers\advertiserController::class, 'create'])->name('advertiser.create');








//supplier

Route::get('/getsuppliers',[App\Http\Controllers\SupplierController::class, 'suppliers'])->name('suppliers');
Route::get('/suppliers',[App\Http\Controllers\SupplierController::class, 'view'])->name('view');





//Income 


Route::get('/income',[App\Http\Controllers\IncomeController::class, 'index'])->name('index');
Route::get('/incomes',[App\Http\Controllers\IncomeController::class, 'incomes'])->name('incomes');
Route::get('/incomesdata',[App\Http\Controllers\IncomeController::class, 'incomesdata'])->name('incomesdata');


