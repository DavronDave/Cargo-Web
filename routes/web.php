<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogTypeController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CompanyContractController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverInvoiceController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\IncotermController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductCategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReceiverPersonController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SenderPersonController;
use App\Http\Controllers\SiteController;
use App\Models\Admin\Role;
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
                        /* Start frontend routes */
Route::get('/', [SiteController::class, 'index'])->name('site.index');
                        /* End frontend routes */
                        /* Start Admin routes */
Route::get('/admin', [AuthController::class, 'login'])->name('login');

Route::post('/admin/authenticate', [AuthController::class, 'authenticate'])->name('admin.authenticate');

Route::get('admin/languages/active/{id}', [LanguageController::class, 'active'])->name('admin.languages.active');




//Route::group(['middleware' => ['auth', 'checkRole:' . Role::ADMIN], 'prefix' => '/admin', 'as' => 'admin.'], function (){
Route::group(['middleware' => 'auth', 'prefix' => '/admin', 'as' => 'admin.', ], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');

        // Cargo
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::resource('countries', CountryController::class);
        Route::resource('regions', RegionController::class);
        Route::resource('districts', DistrictController::class);
        Route::resource('product-categories', ProductCategoriesController::class);
        Route::resource('products', ProductController::class);
        Route::resource('companies', CompanyController::class);
        Route::resource('company-contracts', CompanyContractController::class);
        Route::resource('incoterms', IncotermController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('invoices', InvoiceController::class);
        Route::resource('drivers', DriverController::class);
        Route::resource('sender-people', SenderPersonController::class);
        Route::resource('product-list', ProductListController::class);


        // Role permissions
        Route::get('role-actions', [RoleController::class, 'actions'])->name('role.actions');
        Route::post('role-actions', [RoleController::class, 'change'])->name('role.change');



//        Route::resource('receiver-people', ReceiverPersonController::class);

//        Route::get('/driver/invoices/{driver}', [DriverInvoiceController::class, 'invoices'])->name('driver.invoices');
//        Route::resource('receiver-people', ReceiverPersonController::class);
//        Route::get('/driver-receivers/{driver}', [ReceiverPersonController::class, 'create'])->name('driver-receiver.create');
        Route::get('/driver-receivers/{driver}', [ReceiverPersonController::class, 'index'])->name('driver-receiver.index');
        Route::post('/driver-receivers/{driver}', [ReceiverPersonController::class, 'store'])->name('driver-receiver.store');
        Route::get('/driver-receivers/{driver}/{receiver}/edit', [ReceiverPersonController::class, 'edit'])->name('driver-receiver.edit');
        Route::put('/driver-receivers/{driver}/{receiver}', [ReceiverPersonController::class, 'update'])->name('driver-receiver.update');
        Route::delete('/driver-receivers/{driver}/receiver/{receiver}', [ReceiverPersonController::class, 'destroy'])->name('driver-receiver.destroy');
        Route::post('/move-driver-receivers', [ReceiverPersonController::class, 'moveDriverReceivers'])->name('driver-receiver.move-driver-receivers');



        Route::get('/invoices{project}', [InvoiceController::class, 'index'])->name('invoice.index');
        Route::get('/invoice{project}', [InvoiceController::class, 'create'])->name('invoice.create');
        Route::post('/invoice{project}', [InvoiceController::class, 'store'])->name('invoice.store');
        Route::get('/invoice/invoice={invoice}/project={project}', [InvoiceController::class, 'edit'])->name('invoice.edit');
        Route::put('/invoice/invoice={invoice}/project={project}', [InvoiceController::class, 'update'])->name('invoice.update');

        Route::post('/invoices/{project}', [InvoiceController::class, 'importPassports'])->name('invoice.import');

        Route::post('/move-invoices', [InvoiceController::class, 'moveInvoices'])->name('move-invoices');

        Route::post('/copy-list-products-to-invoice', [InvoiceController::class, 'copyListProductsToInvoice'])->name('copy-invoices');


    //Route::post('/invoice/invoice={invoice}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');
        // Route::delete('/invoices{invoice}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');

       // Route::get('project/invoiceList', [ProjectController::class, 'invoiceList'])->name('project.invoiceList');

        // PDF
        Route::get('/generate-pdf{invoice}', [PDFController::class, 'PDFInvoice'])->name('pdf.invoice');
        Route::get('/generate-invoices{project}', [PDFController::class, 'PDFInvoices'])->name('pdf.invoices');

        Route::get('/generate-tnved/{project}', [PDFController::class, 'PDFTnved'])->name('pdf.tnved');
        Route::get('/generate-proforma/{project}', [PDFController::class, 'PDFProforma'])->name('pdf.proforma');
        Route::get('/generate-manifest/{project}', [PDFController::class, 'PDFManifest'])->name('pdf.manifest');

        Route::get('/proforma', [PDFController::class, 'tnved']);



        //Excel
        Route::get('/export-invoices/{project}', [ExportController::class, 'InvoiceProductExport'])->name('excel.invoices');



    Route::resource('blogs', BlogController::class);
        Route::resource('languages', LanguageController::class);
        Route::resource('blog_types', BlogTypeController::class);

    Route::prefix('contact')->name('contact.')->group(function(){
        Route::get('/index', [ContactController::class, 'index'])->name('index');
    });
    Route::prefix('about')->name('about.')->group(function(){
        Route::get('/index', [AboutController::class, 'index'])->name('index');
    });
    Route::prefix('service')->name('service.')->group(function(){
        Route::get('/index', [ServiceController::class, 'index'])->name('index');
    });
    /*Route::prefix('project')->name('project.')->group(function(){
        Route::get('/index', [ProjectController::class, 'index'])->name('index');
    });*/


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
                        /* End Admin routes */
