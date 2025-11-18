@extends('layout')
@section('content')
    <section style="background-image: url('{{ asset('build/assets/bg-gray.jpg') }}')" class="bg-cover min-h-screen">
        <main class="max-w-5xl mx-auto flex flex-col">

            <h1 class="text-2xl font-bold text-center my-15">Grow your balance with ease.
                Make a deposit and experience banking where even saving feels magical.</h1>

            <div class="bg-secondary text-primary shadow-lg flex justify-between rounded-2xl p-5 border-black border-2 my-2">
                <div class="flex-col text-lg">
                    <h1>Name: <span class="text-light"> {{ $account->name }} </span></h1>
                    <h1>Surname: <span class="text-light">{{ $account->surname }} </span></h1>
                    <h1>Balance: <span class="text-light">{{ $account->balance }} €</span></h1>
                    <h1>Credit Card Number: <span class="text-light">{{ $account->account }} </span></h1>

                </div>

                <div class="flex items-start gap-3">

                    <form action="{{ route('bank.deposit.update', $account->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <a class="inline-block bg-red-500 text-light font-bold p-2 rounded-2xl transform duration-500 hover:scale-105 shadow-md border-2 mr-2"
                            href="{{ route('bank.index') }}">Cancel</a>
                        <input type="number" name="amount" step="0.01" min="0.01"
                            class="bg-white rounded-2xl py-2 mr-2 text-center text-secondary">
                        <button
                            class="inline-block bg-green-500 text-light font-bold p-2 rounded-2xl transform duration-500 hover:scale-105 shadow-md border-2">Deposit</button>
                        @error('amount')
                            <p class="text-red-600 text-sm mt-1 ">{{ $message }}</p>
                        @enderror

                    </form>

                </div>

            </div>

        </main>
    </section>
@endsection
