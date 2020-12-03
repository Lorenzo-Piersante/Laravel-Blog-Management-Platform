@extends ('layouts.app')
    
@section('content')


@if( Auth::user()->id == $user->id OR Auth::user()->role == 'admin' )

<div>
    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        
        <!-- Nome Utente -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                Nome Utente
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{ $user->username }}" required>

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Nome -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{ $user->name }}" required>

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Data di nascita -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="birthday">
                Data di Nascita
            </label>

            <input class="border border-gray-400 p-2 w-full" type="date" name="birthday" id="birthday" value="{{ $user->birthday }}" required>

            @error('birthday')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Codice fiscale -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="fiscalCode">
                Codice Fiscale
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="fiscalCode" id="fiscalCode" value="{{ $user->fiscalCode }}" required>

            @error('fiscalCode')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Residenza -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="residency">
                Residenza
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="residency" id="residency" value="{{ $user->residency }}" required>

            @error('residency')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Descrizione -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                Breve Descrizione Personale
            </label>

            <textarea class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" required>{{ $user->description }}</textarea>

            @error('description')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        
        <!-- Avatar --> 
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
                Avatar
            </label>

            <div class="flex">
                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar" accept="image/*">

                <img src="{{ asset('/storage/'. $user->avatar) }}" alt="your avatar" width="40">
            </div>

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- Email -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                E-Mail
            </label>

            <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ $user->email }}" required>

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <!-- SUBMIT -->
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>

        
        </div>
    </form>
</div>

@else
    <h1 class="py-20 text-center text-4xl font-semibold text-gray-700">401 | Azione non consentita<h1>
@endif


@endsection