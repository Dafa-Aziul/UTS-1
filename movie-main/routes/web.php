    <?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{id}', [MovieController::class, 'detail']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies/store', [MovieController::class, 'store']);
Route::get('/movies/data', [MovieController::class, 'data']);
Route::get('/movies/edit/{id}', [MovieController::class, 'form_edit']);

Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

Route::get('movies/delete/{id}', [MovieController::class, 'delete'])->name('movies.delete');

Route::resource('/categories', CategoryController::class);
Route::get('/categories/data', [CategoryController::class, 'data'])->name('categories.data');
