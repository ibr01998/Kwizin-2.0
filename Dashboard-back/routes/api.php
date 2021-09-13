<?php
use App\http\Controllers\CategoriesController;
use App\http\Controllers\AuthController;
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
//Route::resource('categories', CategoriesController::class);

//Public Routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/Categories', [CategoriesController::class, 'index']);
Route::get('/Categories/{id}', [CategoriesController::class, 'show']);
Route::get('/Categories/search/{name}', [CategoriesController::class, 'search']);

//for protected Routes(Private Routes)
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('/Categories/add', [CategoriesController::class, 'store']);
    Route::put('/Categories/{id}', [CategoriesController::class, 'update']);
    Route::delete('/Categories/{id}', [CategoriesController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'index']);
});

