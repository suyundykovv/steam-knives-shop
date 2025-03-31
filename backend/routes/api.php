// backend/routes/api.php
use App\Http\Controllers\KnifeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
Route::get('/knives', [KnifeController::class, 'index']);
Route::get('/knives/{id}', [KnifeController::class, 'show']);
Route::post('/knives', [KnifeController::class, 'store']);
Route::put('/knives/{id}', [KnifeController::class, 'update']);
Route::delete('/knives/{id}', [KnifeController::class, 'destroy']);
});
