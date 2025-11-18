@extends('layout')
@section('content')
    <section style="background-image: url('{{ asset('build/assets/bg-gray.jpg') }}')" class="bg-cover min-h-screen pb-20">
        <main class="max-w-5xl mx-auto flex flex-col">

            <h1 class="text-2xl font-bold text-center my-15"> Welcome to NovaBank — Open accounts, manage finances,
                and experience
                banking
                where miracles happen!</h1>

            <a class="block text-light text-center mb-10 text-xl bg-secondary py-3 px-6 rounded-2xl font-bold border-black border-2 transform duration-500 hover:scale-101 shadow-md"
                href="{{ route('bank.create') }}">Create Account</a>

            @foreach ($accounts as $account)
                <div
                    class="bg-secondary text-primary shadow-lg flex justify-between rounded-2xl p-5 border-black border-2 my-2">
                    <div class="flex-col text-lg">
                        <h1>Name: <span class="text-light"> {{ $account->name }} </span></h1>
                        <h1>Surname: <span class="text-light">{{ $account->surname }} </span></h1>
                        <h1>Balance: <span class="text-light">{{ $account->balance }} €</span></h1>
                        <h1>Credit Card Number: <span class="text-light">{{ $account->account }} </span></h1>
                    </div>
                    <div class="flex items-center gap-3">
                        <form action="{{ route('bank.destroy', $account->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 text-light font-bold p-2 rounded-2xl transform duration-500 hover:scale-105 shadow-md border-2">Delete
                                Account</button>
                        </form>

                        <a class="block bg-green-500 text-light font-bold p-2 rounded-2xl transform duration-500 hover:scale-105 shadow-md border-2"
                            href="{{ route('bank.deposit.show', $account->id) }}">Add
                            Money</a>
                        <a class="bg-blue-500 text-light font-bold p-2 rounded-2xl block transform duration-500 hover:scale-105 shadow-md border-2"
                            href="{{ route('bank.withdraw.show', $account->id) }}">Withdraw Money</a>
                    </div>
                </div>
            @endforeach
        </main>
    </section>
@endsection
