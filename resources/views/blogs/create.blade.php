@extends ('layouts.app')
    
@section('content')

<div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
    
        <div class="font-bold text-lg mb-4">Creazione del blog</div>

            <form method="POST" action="{{ route('blogs.store') }}">
                @csrf

                <!-- Titolo -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Titolo
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" autocomplete="title" autofocus value="{{ old('title') }}" required>

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Descrizione -->
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                        Descrizione
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" autocomplete="description" autofocus value="{{ old('description') }}" required></textarea>

                    @error('description')
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

@endsection