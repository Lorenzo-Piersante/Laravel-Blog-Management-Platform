@extends('layouts.master')

@section('stuff')
<div class="container mx-auto px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
    
        <div class="font-bold text-lg mb-4">Registrazione</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Nome Utente -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                        Nome Utente
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" autocomplete="username" autofocus value="{{ old('username') }}" required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                
                <!-- Nome -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                        Nome
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{ old('name') }}" required>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Data di Nascita -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="birthday">
                        Data Di Nascita
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="date" name="birthday" id="birthday" value="{{ old('birthday') }}" required>

                    @error('birthday')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Codice Fiscale -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="fiscalCode">
                        Codice Fiscale
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="fiscalCode" id="fiscalCode" value="{{ old('fiscalCode') }}" required>

                    @error('fiscalCode')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Residenza -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="residency">
                        Residenza
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="residency" id="residency" autocomplete="residency" autofocus value="{{ old('residency') }}" required>

                    @error('residency')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Descrizione -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                        Breve Descrizione Personale
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" autocomplete="description" autofocus value="{{ old('description') }}" required></textarea>

                    @error('description')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Email -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                
                <!-- Password -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" autocomplete="new-password">

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                        Conferma Della Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">

                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                
                <!-- SUBMIT -->
                <div>
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Invio
                    </button>
                </div>
            </form>

</div>            

@endsection
