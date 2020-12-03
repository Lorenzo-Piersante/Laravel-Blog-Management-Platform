@extends ('layouts.app')
    
@section('content')


<div>
    <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        
        <!-- Titolo -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                Titolo
            </label>

            <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" value="{{ $blog->title }}" required>

            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Descrizione -->
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="description">
                Descrizione
            </label>

            <textarea class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" required>{{ $blog->description }}</textarea>

            @error('description')
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



@endsection