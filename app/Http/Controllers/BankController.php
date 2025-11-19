<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccount;
use App\Models\Account;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(): View
    {
        $accounts = Account::orderBy('surname')->get();

        return view('bank.index', compact('accounts'));
    }

    public function destroy(Account $account): RedirectResponse
    {
        $account->delete();

        return redirect()->route('bank.index');
    }

    public function create(): View
    {
        return view('bank.create');
    }

    public function store(StoreAccount $request): RedirectResponse
    {
        $validated = $request->validated();

        Account::create(
            [
                'name' => $validated['name'],
                'surname' => $validated['surname'],
                'identity_number' => $validated['identity_number'],
                'balance' => 0,
                'account' => 'LT' . rand(10000000000000, 99999999999999),
            ]
        );

        return redirect()->route('bank.index');
    }

    public function showDeposit(Account $account): View
    {
        return view('bank.deposit', compact('account'));
    }

    public function updateDeposit(Request $request, Account $account): RedirectResponse
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:9999',
        ]);
        $amount = (float) $request['amount'];

        $account->balance += $amount;
        $account->save();

        return redirect()->route('bank.index');
    }

    public function showWithdraw(Account $account): View
    {
        return view('bank.withdraw', compact('account'));
    }

    public function updateWithdraw(Request $request, Account $account): RedirectResponse
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01|max:9999',
        ]);
        $amount = (float) $request['amount'];

        if ($account->balance < $amount) {
            return redirect()->back()->withErrors(['amount' => 'The withdraw is bigger than balance']);
        }
        $account->balance -= $amount;
        $account->save();

        return redirect()->route('bank.index');
    }
}
