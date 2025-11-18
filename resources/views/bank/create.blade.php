@extends('layout')
@section('content')
    <section style="background-image: url('{{ asset('build/assets/bg-gray.jpg') }}')" class="bg-cover min-h-screen">
        <main class="max-w-5xl mx-auto flex flex-col">

            <h1 class="text-3xl font-bold text-center my-20"> Create a Brand New Account Here!</h1>
            <form method="POST" action="{{ route('bank.store') }}" class="text-center ">
                @csrf
                <section class="max-w-2xl mx-auto">
                    <div class="flex items-center gap-4 mt-5">
                        <label class="text-2xl text-primary font-serif w-56 text-left" for="name">Name</label>
                        <input
                            class="flex-1 bg-gray-300/20 py-2 px-5 rounded-sm text-gray-700 shadow-md border border-gray-200 focus:outline-none w-full"
                            type="text" name="name" placeholder="write name here">
                    </div>
                    @error('name')
                        <p class="text-red-600 text-sm mt-1 pl-3 text-right ">{{ $message }}</p>
                    @enderror

                    <div class="flex items-center gap-4 mt-5">
                        <label class="text-2xl text-primary font-serif w-56 text-left " for="surname">Surname</label>
                        <input
                            class="flex-1 bg-gray-300/20 py-2 px-5 rounded-sm text-gray-700 shadow-md border border-gray-200 focus:outline-none w-full "
                            type="text" name="surname" placeholder="write surname here">

                    </div>
                    @error('surname')
                        <p class="text-red-600 text-sm mt-1 text-right ">{{ $message }}</p>
                    @enderror

                    <div class="flex items-center gap-4 mt-5">

                        <label class="text-2xl text-primary font-serif w-56 text-left whitespace-nowrap "
                            for="name">Identity
                            Number</label>
                        <input
                            class="flex-1 bg-gray-300/20 py-2 px-5 rounded-sm text-gray-700 shadow-md border border-gray-200 focus:outline-none w-full"
                            type="text" name="identity_number" placeholder="write ID here">

                    </div>
                    @error('identity_number')
                        <p class="pl-12 text-red-600 text-sm mt-1 text-right ">{{ $message }}</p>
                    @enderror

                    <a href="{{ route('bank.index') }}"
                        class="mt-5 mr-10 items-center inline-block text-light text-center mb-10 text-xl bg-red-500 py-2 px-4 rounded-2xl font-bold border-white border-2 transform duration-500 hover:scale-101 shadow-md">Cancel
                    </a>

                    <button
                        class="mt-5 items-center inline-block text-light text-center mb-10 text-xl bg-secondary py-2 px-4 rounded-2xl font-bold border-black border-2 transform duration-500 hover:scale-101 shadow-md">Submit</button>

                </section>
            </form>

        </main>
    </section>
@endsection
