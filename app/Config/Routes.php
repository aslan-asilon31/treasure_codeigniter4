<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
//Visitor
$routes->get('/', 'VisitorController::index', ['as' => 'visitor']);
$routes->get('/visitor-product-detail', 'VisitorController::product_detail', ['as' => 'visitor-product-detail']);
$routes->post('/visitor-addcart', 'VisitorController::add_cart', ['as' => 'visitor-add-cart']);
$routes->get('/visitor-cart', 'VisitorController::product_cart', ['as' => 'visitor-cart']);

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("admin", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "AdminController::index");
});
// User routes
$routes->group("user", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "UserController::index");
});
// Editor routes
$routes->group("editor", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "EditorController::index");
});
$routes->get('logout', 'UserController::logout');


// Dashboard
$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);


// $routes->get('/dashboard', 'DashboardController::index');


// $routes->get('/product', 'ProductController::index', ['as' => 'product']);
// $routes->get('/product/create', 'ProductController::create', ['as' => 'product.create']);
// $routes->post('product/store', 'ProductController::store', ['as' => 'product.store']);
// $routes->get('product/edit/(:num)', 'ProductController::edit/$1', ['as' => 'product.edit']);
// $routes->post('product/update/(:num)', 'ProductController::update/$1', ['as' => 'product.update']);
// $routes->get('product/delete/(:num)', 'ProductController::delete/$1');

$routes->get('/blog', 'Blog::index');
$routes->get('/blog/form', 'Blog::form');
$routes->post('blog/simpan', 'Blog::simpan');
$routes->post('blog/update/(:num)', 'Blog::update/$1');
$routes->get('blog/delete/(:num)', 'Blog::delete/$1');

// Users
$routes->get('users/', 'UserController::index', ['as' => 'user-index']);
// $routes->get('product/create', 'ProductController::form');
// $routes->post('product/store', 'ProductController::store');
// $routes->get('product/form_edit/(:num)', 'ProductController::form_edit/$1');
// $routes->post('product/edit', 'ProductController::edit');
// $routes->post('product/update/(:num)', 'ProductController::update/$1');
// $routes->get('product/delete/(:num)', 'ProductController::delete/$1');
// End Products

// Products
$routes->get('products/', 'ProductController::index', ['as' => 'product-index']);
$routes->get('products/create', 'ProductController::form');
$routes->post('products/store', 'ProductController::store');
$routes->get('products/form_edit/(:num)', 'ProductController::form_edit/$1');
$routes->post('products/edit', 'ProductController::edit');
$routes->post('products/update/(:num)', 'ProductController::update/$1');
$routes->get('products/delete/(:num)', 'ProductController::delete/$1');
// End Products

// Product details
$routes->get('productdetails/', 'ProductDetailController::index', ['as' => 'productdetail-index']);
$routes->get('productdetails/create', 'ProductDetailController::form');
$routes->post('productdetails/store', 'ProductDetailController::store');
$routes->get('productdetails/form_edit/(:num)', 'ProductDetailController::form_edit/$1');
$routes->post('productdetails/edit', 'ProductDetailController::edit');
$routes->post('productdetails/update/(:num)', 'ProductDetailController::update/$1');
$routes->get('productdetails/delete/(:num)', 'ProductDetailController::delete/$1');
// End Product details

// Productimages
$routes->get('productimages/', 'ProductImagesController::index', ['as' => 'productimages-index']);
$routes->get('productimages/create', 'ProductImagesController::create');
$routes->post('productimages/store', 'ProductImagesController::store');
$routes->get('productimages/edit/(:num)', 'ProductImagesController::edit/$1');
$routes->post('productimages/update/(:num)', 'ProductImagesController::update/$1');
$routes->get('productimages/delete/(:num)', 'ProductImagesController::delete/$1');
// End Productimages

// Productimages
$routes->get('categories/', 'CategoryController::index', ['as' => 'categories-index']);
$routes->get('categories/create', 'CategoryController::create');
$routes->post('categories/store', 'CategoryController::store');
$routes->get('categories/edit/(:num)', 'CategoryController::edit/$1');
$routes->post('categories/update/(:num)', 'CategoryController::update/$1');
$routes->get('categories/delete/(:num)', 'CategoryController::delete/$1');
// End Productimages


// Subjects
$routes->get('subjects/', 'SubjectsController::index');
$routes->get('subjects/create', 'SubjectsController::create');
$routes->post('subjects/store', 'SubjectsController::store');
$routes->get('subjects/edit/(:num)', 'SubjectsController::edit/$1');
$routes->post('subjects/update/(:num)', 'SubjectsController::update/$1');
$routes->get('subjects/delete/(:num)', 'SubjectsController::delete/$1');
// End Subjects

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
