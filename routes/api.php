<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ImageController;
use App\Models\Post;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/uploadfile',[UploadController::class, 'index']);
Route::post('/uploadfile',[UploadController::class, 'store']);
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts', [PostsApiController::class, 'index']);
Route::post('/posts', [PostsApiController::class, 'store']);
Route::put('/posts/{post}', [PostsApiController::class, 'update']);
Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
*/
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::get('/products/search/ByName/name/{value}', [ProductController::class, 'findByName']);
Route::get('/products/search/ByParticularity/particularity/{value}', [ProductController::class, 'findByParticularity']);
Route::get('/products/search/ByCategoryName/category_name/{value}', [ProductController::class, 'findByCategoryName']);
Route::get('/products/search/ByNameContains/name/{value}', [ProductController::class, 'findByNameContains']);
Route::get('/products/search/ByPopulary/populary/{value}', [ProductController::class, 'findByPopulary']);
Route::get('/products/search/ByNewProduct/newProduct/{value}', [ProductController::class, 'findByNewProduct']);


/*************************************************************/
Route::get('/images', [ImageController::class, 'index']);
Route::get('/images/{id}', [ImageController::class, 'show']);
Route::post('/images', [ImageController::class, 'store']);
Route::put('/images/{image}', [ImageController::class, 'update']);
Route::delete('/images/{id}', [ImageController::class, 'delete']);
Route::get('/images/search/ByIdentifier/identifier/{identifier}', [ImageController::class, 'findByIdentifier']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{category}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'delete']);

Route::get('/commandes', [CommandeController::class, 'index']);
Route::get('/commandes/{id}', [CommandeController::class, 'show']);
Route::post('/commandes', [CommandeController::class, 'store']);
Route::put('/commandes/{commande}', [CommandeController::class, 'update']);
Route::delete('/commandes/{id}', [CommandeController::class, 'delete']);
