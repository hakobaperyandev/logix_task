<?php

use App\Http\Controllers\ContractController;
use App\Models\CompanyOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('contracts', [ContractController::class, 'index']);
Route::post('contracts', [ContractController::class, 'store']);
Route::get('contracts/{company}', [ContractController::class, 'show']);


// Route::get('/test', function(){
//     $fiveDaysLeftContracts = CompanyOrder::whereDate('end', '=', Carbon::today()->addDays(5))->with('companies')->get();
//         foreach ($fiveDaysLeftContracts as $contract) {
//             Mail::raw('Only 5 days remain before the expiration of your account/service.', function ($message) use ($contract) {
//                 $message->to($contract->companies[0]->email)
//                         ->subject('Test Email');
//             });
//             $contract->update(['notified' => true]);
//         }
//     return ['data' => $fiveDaysLeftContracts];

// });