<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\UserLogin;
use App\Livewire\AboutUsPage;
use App\Livewire\AddAdminProduct;
use App\Livewire\AddUserAddress;
use App\Livewire\AdminCategory;
use App\Livewire\AdminProductList;
use App\Livewire\AdminSetting;
use App\Livewire\AdminSubCategory;
use App\Livewire\AdminUsers;
use App\Livewire\Brands;
use App\Livewire\CartPage;
use App\Livewire\CategoryItemPage;
use App\Livewire\CategoryPage;
use App\Livewire\CheckOutPage;
use App\Livewire\Color;
use App\Livewire\ContactPage;
use App\Livewire\CustomeProduct;
use App\Livewire\DashBoard;
use App\Livewire\DeliveryBoysList;
use App\Livewire\EditAdminProduct;
use App\Livewire\EditUserAddress;
use App\Livewire\Index;
use App\Livewire\MainBanner;
use App\Livewire\ManageOrder;
use App\Livewire\Material;
use App\Livewire\OrderDetails;
use App\Livewire\OrderInvoice;
use App\Livewire\Orders;
use App\Livewire\OrderSuccess;
use App\Livewire\PageBanner;
use App\Livewire\ProductDetails;
use App\Livewire\Sizes;
use App\Livewire\SmallBanner;
use App\Livewire\UserDashBoard;
use App\Livewire\ViewOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Webklex\IMAP\Facades\Client;

ini_set('memory_limit', '2048M');
Route::get('get_mail', function () {
    $client = Client::account("default");
    $client->connect();

    /** @var \Webklex\PHPIMAP\Support\FolderCollection $folders */
    $folders = $client->getFolders(false);

    /** @var \Webklex\PHPIMAP\Folder $folder */
    foreach ($folders as $folder) {
        //$this->info("Accessing folder: ".$folder->path);
        echo 'Path = ' . $folder->path . '';
        $messages = $folder->messages()->all()->get();

        //$this->info("Number of messages: ".$messages->count());

        /** @var \Webklex\PHPIMAP\Message $message */
        foreach ($messages as $message) {
            //$this->info("\tMessage: ".$message->getSender());
            echo '\t Message: ' . $message->getSender();
        }
    }
});

Route::get('/', Index::class)->name('index');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/about', AboutUsPage::class)->name('about');
Route::get('/cart', CartPage::class)->name('cart');
Route::get('shop/{category}', CategoryItemPage::class)->name('categoryItem');
Route::get('shop/{category}/{sub_category}', CategoryPage::class)->name('category');
Route::get('/{cat}/{sub_cat}/{id}', ProductDetails::class)->name('product_detail');
Route::get('/custom_product', CustomeProduct::class)->name('custom_product');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// logout

Route::get('/logout', function () {
    Auth::guard('web')->logout();
    return redirect()->route('login');
})->name('logout');


// Route::get('user_dashboard', UserDashBoard::class)->middleware('auth')->name('user_dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/checkout', CheckOutPage::class)->name('checkout');
    Route::get('/user_dashboard', UserDashBoard::class)->name('user_dashboard');
    Route::get('/add_address', AddUserAddress::class)->name('add_address');
    Route::get('/order-success/{id}', OrderSuccess::class)->name('order_success');
    Route::get('/view_order/{id}', ViewOrder::class)->name('view_order');

    Route::get('edit_address/{id}', EditUserAddress::class)->name('edit_address');
});


Route::prefix('/admin')->middleware(UserLogin::class)->group(function () {
    Route::get('dashboard', DashBoard::class)->name('dashboard');
    Route::get('users', AdminUsers::class)->name('users');
    Route::get('brand', Brands::class)->name('admin_brand');
    Route::get('category', AdminCategory::class)->name('admin_category');
    Route::get('sub_category', AdminSubCategory::class)->name('admin_sub_category');
    Route::get('products', AdminProductList::class)->name('admin_product');
    Route::get('product-add', AddAdminProduct::class)->name('add_admin_product');
    Route::get('product/edit/{id}', EditAdminProduct::class)->name('edit_admin_product');

    // Delivery Boys
    Route::get('delivery', DeliveryBoysList::class)->name('delivery_boys_list');
    Route::get('setting', AdminSetting::class)->name('adminSetting');

    // Order
    Route::get('manage_order', ManageOrder::class)->name('manage_order');
    Route::get('orders', Orders::class)->name('orders');
    Route::get('order/view/{id}', OrderDetails::class)->name('orderDetail');
    Route::get('order/invoice/{id}', OrderInvoice::class)->name('orderInvoice');

    // Banner
    Route::get('main_banner', MainBanner::class)->name('mainBanner');
    Route::get('page_banner', PageBanner::class)->name('pageBanner');

    // Custome Product
    Route::get('custome-color', Color::class)->name('custome_color');
    Route::get('custome-sizes', Sizes::class)->name('cutome_size');
    Route::get('custome-material', Material::class)->name('cuatome_material');
});

require __DIR__ . '/auth.php';
