@extends('layout')
@section('content')
    <section>
        <main class="relative w-full h-screen ">

            <img class="h-full w-full " src="{{ asset('images/bank-background.png') }}" alt="bank">

            <div class="absolute inset-0 flex justify-center items-center">
                <div class="flex-col text-center">

                    <h1 class="text-5xl font-bold text-white text-stroke mb-10">
                        The Bank You'll Want to Stay With
                    </h1>

                    <a href=" {{ route('bank.index') }}"
                        class="inline-block text-white text-xl border-black border-2 bg-secondary py-3 px-6 rounded-2xl font-bold  transform duration-500 hover:scale-105 shadow-md">Enter
                        Bank</a>

                </div>
            </div>
        </main>
    </section>
@endsection
