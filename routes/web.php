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

// Route::get('/', function () {
//     return view('fornt.master.master');
// });


/*
|--------------------------------------------------------------------------
| Category Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('adminpanel/addProduct/addCategory', 'CategoryController@create');
Route::post('adminpanel/saveProductCategory', 'CategoryController@store')->name('admin_save_product_category');
Route::post('adminpanel/updateproduct/category', 'CategoryController@update')->name('admin_update_product_category');
Route::get('adminpanel/addProduct/categoryList', 'CategoryController@index');
Route::get('adminpanel/editproduct/category/{id}', 'CategoryController@edit');
Route::get('adminpanel/viewproduct/category/{id}', 'CategoryController@show');
Route::get('adminpanel/deleteproduct/category/{id}', 'CategoryController@destroy');

//Front Hand  Page start From Here
Route::get('category', 'CategoryController@view_category');
Route::get('category/{name}', 'CategoryController@single_category');




/*
|--------------------------------------------------------------------------
| Category Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| TProduct Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
//*********************************** */
Route::get('haetywxisbwvfkixds', 'TproductController@index');
Route::get('adminpanel/addProduct', 'TproductController@create');
Route::post('adminpanel/saveProduct', 'TproductController@store')->name('admin_save_Product');
Route::post('adminpanel/updateProduct', 'TproductController@update')->name('admin_update_Product');
Route::get('adminpanel/productList', 'TproductController@productList');
Route::get('adminpanel/viewProduct/{id}', 'TproductController@show');
Route::get('adminpanel/editProduct/{id}', 'TproductController@edit');
Route::get('adminpanel/deleteProduct/{id}', 'TproductController@destroy');


/*
|--------------------------------------------------------------------------
| TProduct Controller  End  ..............................................
|--------------------------------------------------------------------------
 */

/*
|--------------------------------------------------------------------------
| Page Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('adminpanel/addPage', 'PageController@create');
Route::post('adminPanel/savepage', 'PageController@store')->name('admin_save_Page');
Route::post('adminPanel/updatePage', 'PageController@update')->name('admin_update_Page');
Route::get('adminpanel/pageList', 'PageController@index');
Route::get('adminpanel/pageList', 'PageController@index');
Route::get('adminpanel/viewPage/{id}', 'PageController@show');
Route::get('adminpanel/editPage/{id}', 'PageController@edit');
Route::get('adminpanel/deletePage/{id}', 'PageController@destroy');


/*
|--------------------------------------------------------------------------
| Page Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| Post Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('adminpanel/addPost', 'PostController@create');
Route::post('adminPanel/savepost', 'PostController@store')->name('admin_save_Post');
Route::post('adminPanel/updatepost', 'PostController@update')->name('admin_update_Post');
Route::get('adminpanel/postList', 'PostController@index');
Route::get('adminpanel/viewPost/{id}', 'PostController@show');
Route::get('adminpanel/editPost/{id}', 'PostController@edit');
Route::get('adminpanel/deletePost/{id}', 'PostController@destroy');



/*
|--------------------------------------------------------------------------
| Page Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| Home Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('/', 'HomeController@index');
Route::get('/terms-and-condition', 'HomeController@terms_condition');


/*
|--------------------------------------------------------------------------
| Home Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| Cart Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('addTocart/{id}', 'CartController@addTocart');

Route::post('addTocart/from/details', 'CartController@add_tocard_details_page')->name('add_tocard_details_page');




Route::get('process/cart', 'CartController@process');


Route::get('cart/view', 'CartController@index');

Route::post('cart/update', 'CartController@cartUpdate')->name('update_card_by_user');

Route::post('cart/update/location', 'CartController@cartUpdatelocation')->name('update_card_location');

Route::get('cart/item/delete/{id}', 'CartController@destroy');


/*
|--------------------------------------------------------------------------
| Cart Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| CustomerController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('customer/registration', 'CustomerController@create');

Route::get('customer/login', 'CustomerController@login');

Route::get('customer/login-register', 'CustomerController@loginregister');

Route::post('customer/registration', 'CustomerController@store')->name('register_customer_shipping_info');

Route::get('customer/shipping/view', 'CustomerController@index');

Route::post('customer/update/shipping', 'CustomerController@update')->name('update_customer_shipping_info');

Route::post('register/gust/shipping', 'CustomerController@saveguest')->name('register_guest_customer_shipping_info');

Route::get('guest/shipping', 'CustomerController@gust_shipping');

Route::get('customer/shipping', 'CustomerController@shipping');

Route::get('customer/list', 'CustomerController@customer_list');

Route::get('customer/details/{id}', 'CustomerController@customer_details_information');

Route::get('login/customer', 'CustomerController@login_customer');

Route::get('register/customer', 'CustomerController@register_customer');

Route::get('adminpanel/register/customer', 'CustomerController@admin_register_customer');

Route::get('/adminpanel/all/customer/list', 'CustomerController@all_customer_list');

Route::get('/how_to_pace_order', 'CustomerController@how_to_pace_order');



/*
|--------------------------------------------------------------------------
| CustomerController Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| CheckoutController Controller  start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('cart/review', 'CheckoutController@index');


Route::post('place_order', 'CheckoutController@place_order')->name('place_order');

Route::get('/place_order/status', 'CheckoutController@place_order_status');

/*
|--------------------------------------------------------------------------
| CheckoutController Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| ProductManagementController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('adminpanel/latest/order', 'ProductManagementController@index');

Route::get('adminpanel/order/list/view', 'ProductManagementController@all_order_view');

Route::get('adminpanel/order/success/{id}', 'ProductManagementController@success');

Route::get('adminpanel/order/details/{id}', 'ProductManagementController@order_details');

Route::get('adminpanel/torated/customer', 'ProductManagementController@top_rated_seller');

Route::get('display/product/details/{id}', 'ProductManagementController@product_details');


/*
|--------------------------------------------------------------------------
| ProductManagementController Controller  End ..............................................
|--------------------------------------------------------------------------
 */

/*
|--------------------------------------------------------------------------
| WishlistController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('addTowishlist/{id}', 'WishlistController@create');
Route::get('view/wishlist', 'WishlistController@index');
Route::get('wishlist/item/delete/{id}', 'WishlistController@destroy');




/*
|--------------------------------------------------------------------------
| WishlistController Controller  End ..............................................
|--------------------------------------------------------------------------
 */

/*
|--------------------------------------------------------------------------
| MyaccountController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('customer/order/list', 'MyaccountController@myorder_list');

Route::get('customer/order/details/{id}', 'MyaccountController@index');
Route::get('customer/order_info','MyaccountController@print_info');



/*
|--------------------------------------------------------------------------
| MyaccountController Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| SearchController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

// Route::any('search','SearchController@index');
Route::any('search', 'SearchController@search_result')->name('search_result');

/*
|--------------------------------------------------------------------------
| SearchController Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| SubscriveController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::post('store/subscriver', 'SubscriveController@store')->name('store_subscriver');



/*
|--------------------------------------------------------------------------
| SubscriveController Controller  End ..............................................
|--------------------------------------------------------------------------
 */



/*
|--------------------------------------------------------------------------
| ReportController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('adminpanel/order/report', 'ReportController@index')->name('daily_order');

Route::get('adminpanel/order/report/between', 'ReportController@between_date_order')->name('between_date_order');


// Route::get('adminpanel/daily/order/report','ReportController@daily_order')->name('daily_order');



/*
|--------------------------------------------------------------------------
| ReportController Controller  End ..............................................
|--------------------------------------------------------------------------
 */



/*
|--------------------------------------------------------------------------
| GeneralsettingController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */



/*
|--------------------------------------------------------------------------
| GeneralsettingController Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| AdminController Controller  End ..............................................
|--------------------------------------------------------------------------
 */
Route::get('haetywxisbwvfkixds/login', 'AdminController@index');

Route::post('admin/login/check', 'AdminController@admin_login_check')->name('admin_login_check');

Route::get('adminpanel/logout/admin/{id}', 'AdminController@destroy');

Route::get('adminpanel/add/admin', 'AdminController@create');

Route::get('adminpanel/all/admin', 'AdminController@admin_list');

Route::post('adminpanel/register/admin', 'AdminController@store')->name('register_admin');





/*
|--------------------------------------------------------------------------
| AdminController Controller  End ..............................................
|--------------------------------------------------------------------------
 */


/*
|--------------------------------------------------------------------------
| CorporateController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('corporate/order', 'CorporateController@create');

Route::post('corporate/save/order', 'CorporateController@store')->name('save_corporate_order');
Route::get('adminpanel/corporate/order', 'CorporateController@index');

Route::get('adminpanel/corporate/order/action', 'CorporateController@action_list');

Route::get('adminpanel/corporate/order/action/{id}', 'CorporateController@destroy');


/*
|--------------------------------------------------------------------------
| CorporateController Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| ContactController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */

Route::get('contact-us', 'ContactController@index');
Route::post('contact_us/send', 'ContactController@store')->name('contact_us');

Route::get('adminpanel/contact/message/list', 'ContactController@message_list');
Route::get('adminpanel/contact/action/message', 'ContactController@action_message');
Route::get('adminpanel/contact/message/destroy/{id}', 'ContactController@destroy');




/*
|--------------------------------------------------------------------------
| ContactController Controller  End ..............................................
|--------------------------------------------------------------------------
 */



/*
|--------------------------------------------------------------------------
| HomePageController Controller  End ..............................................
|--------------------------------------------------------------------------
 */

Route::get('blog/details/{id}', 'HomePageController@index');

Route::get('about-us', 'HomePageController@about_page');

Route::get('blog', 'HomePageController@blog_page');

Route::get('delivery-policy', 'HomePageController@delivery_policy');

Route::get('privacy-policy', 'HomePageController@privacy_policy');

Route::get('how-to-buy', 'HomePageController@how_buy');

Route::get('why-trust', 'HomePageController@why_trust');




/*
|--------------------------------------------------------------------------
| HomePageController Controller  End ..............................................
|--------------------------------------------------------------------------
 */



Auth::routes();

/*
|--------------------------------------------------------------------------
| HomeController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminpanel/logo', 'HomeController@upload_logo');

Route::post('logo/save', 'HomeController@store')->name('admin_save_brand_logo');

Route::get('/adminpanel/addslider', 'HomeController@add_slider');



/*
|--------------------------------------------------------------------------
| HomeController Controller  End ..............................................
|--------------------------------------------------------------------------
 */




/*
|--------------------------------------------------------------------------
| SliderController Controller  Start ..............................................
|--------------------------------------------------------------------------
 */
Route::get('adminpanel/addslider', 'SliderController@create');

Route::get('adminpanel/sliderlist', 'SliderController@index');

Route::post('adminpanel/save_slider', 'SliderController@store')->name('admin_save_slider');

Route::post('adminpanel/update_slider', 'SliderController@update')->name('admin_update_slider');

Route::get('adminpanel/editslider/slider/{id}', 'SliderController@edit');

Route::get('adminpanel/delete/slider/{id}', 'SliderController@destroy');

Route::get('/adminpanel/update/title', 'SliderController@update_title');

Route::post('adminpanel/update_title', 'SliderController@update_title_slug')->name('admin_update_title');



/*
|--------------------------------------------------------------------------
| SliderController Controller  End ..............................................
|--------------------------------------------------------------------------
 */

