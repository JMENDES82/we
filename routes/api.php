<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceivedController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('received/status-payment', [ReceivedController::class, 'statusPayment']);
Route::post('received/status-payment-credit', [ReceivedController::class, 'statusPaymentCredit']);

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

Route::get('transaction', 'WalletcronController@transaction');

// Route::post('received/status-payment', [ReceivedController::class, 'statusPayment'])->withoutMiddleware(['auth:sanctum', 'verified']);
// Route::post('received/status-payment', "ReceivedController@statusPayment");
// Route::post('received/status-payment', "ReceivedController@statusPayment")->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
