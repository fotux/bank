<?php

use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/banks', [BankController::class, 'index'])->name('bank.index');
Route::delete('/banks/{account}', [BankController::class, 'destroy'])->name('bank.destroy');
Route::get('/banks/create', [BankController::class, 'create'])->name('bank.create');
Route::post('/banks/create', [BankController::class, 'store'])->name('bank.store');

Route::get('/banks/{account}/deposit', [BankController::class, 'showDeposit'])->name('bank.deposit.show');
Route::patch('/banks/{account}/deposit', [BankController::class, 'updateDeposit'])->name('bank.deposit.update');

Route::get('/banks/{account}/withdraw', [BankController::class, 'showWithdraw'])->name('bank.withdraw.show');
Route::patch('/banks/{account}/withdraw', [BankController::class, 'updateWithdraw'])->name('bank.withdraw.update');
