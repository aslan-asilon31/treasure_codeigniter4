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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'DashboardController::index');


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

// Products
$routes->get('product/', 'ProductController::index', ['as' => 'product-index']);
$routes->get('product/create', 'ProductController::form');
$routes->post('product/store', 'ProductController::store');
$routes->get('product/form_edit/(:num)', 'ProductController::form_edit/$1');
$routes->post('product/edit', 'ProductController::edit');
$routes->post('product/update/(:num)', 'ProductController::update/$1');
$routes->get('product/delete/(:num)', 'ProductController::delete/$1');
// End Products

// Product details
$routes->get('productdetail/', 'ProductDetailController::index', ['as' => 'productdetail-index']);
$routes->get('productdetail/create', 'ProductDetailController::form');
$routes->post('productdetail/store', 'ProductDetailController::store');
$routes->get('productdetail/form_edit/(:num)', 'ProductDetailController::form_edit/$1');
$routes->post('productdetail/edit', 'ProductDetailController::edit');
$routes->post('productdetail/update/(:num)', 'ProductDetailController::update/$1');
$routes->get('productdetail/delete/(:num)', 'ProductDetailController::delete/$1');
// End Product details

// Productimages
$routes->get('productimage/', 'ProductImagesController::index', ['as' => 'productimages-index']);
$routes->get('productimage/create', 'ProductImagesController::create');
$routes->post('productimage/store', 'ProductImagesController::store');
$routes->get('productimage/edit/(:num)', 'ProductImagesController::edit/$1');
$routes->post('productimage/update/(:num)', 'ProductImagesController::update/$1');
$routes->get('productimage/delete/(:num)', 'ProductImagesController::delete/$1');
// End Productimages

// Productimages
$routes->get('category/', 'CategoryController::index', ['as' => 'categories-index']);
$routes->get('category/create', 'CategoryController::create');
$routes->post('category/store', 'CategoryController::store');
$routes->get('category/edit/(:num)', 'CategoryController::edit/$1');
$routes->post('category/update/(:num)', 'CategoryController::update/$1');
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1');
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
