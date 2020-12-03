@extends ('layouts.app')
    
@section('content')

<div class="flex justify-between">
    @if( Auth::user()->id == $blog->user_id )
        <a href="{{ route('blogs.edit', $blog->id) }}" class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs mr-2">Modifica Blog</a>
    @endif
    @if( Auth::user()->id == $blog->user_id  OR  Auth::user()->role == 'staff'  OR  Auth::user()->role == 'admin')    
        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
        @method('DELETE')
        @csrf
            <button type="submit" class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs mr-2">Elimina Blog</button>
        </form>
    @endif
</div>

<!-- Descrizione blog -->
<div class="text-center mt-8">
    <h2 class="my-4 text-2xl text-blue-700 font-bold">{{ $blog->title }}</h2>
    <div class="my-4 text-lg">{{ 'Proprietario: '. $blog->user->name }}</div>
    <div class="my-4 text-gray-600">{{ $blog->description }}</div>
</div>

<br><br>




@if( Auth::user()->id == $blog->user_id OR $blog->admitted->find(Auth::user()->id)  OR Auth::user()->role == 'staff'  OR Auth::user()->role == 'admin' )

<!-- CREAZIONE POST -->  
<h2 class="my-4 text-xl text-center my-4 font-bold">Pubblica su questo blog:</h2>
<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="{{ route('posts.store', $blog->id) }}" >
    @csrf
        <input type="text" name="title" class="w-full border border-gray-500 rounded-lg mb-2" placeholder="Titolo del post" required>
        <textarea name="body" class="w-full border border-gray-500 rounded-lg" placeholder="Corpo del post" required></textarea>
        <hr class="my-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-10 text-sm text-white h-10">Pubblica</button>
    </form>

    @error('title')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

<br><br>


<!-- LISTA DEI POST -->
@forelse ($blog->posts as $post)
<div class="flex p-4 border rounded-lg border-b-gray-400 mb-4">
    <div class="mr-2 flex-shrink-0">
        @if( $post->user->avatar )
        <img src="{{ asset('/storage/'. $post->user->avatar) }}" width="50px" class="rounded-full mr-2">
        @else
        <img src="{{ asset('/images/default.png') }}" width="50px" class="rounded-full mr-2">
        @endif
    </div>
                            
    <div>
        <h5 class="font-bold mb-2">{{ $post->title }}</h5>
        <p class="text-sm">{{ $post->body }}</p>
        <hr class="my-4">
        <div class="flex justify-between">
            <div>{{ 'Autore: '. $post->user->name }}</div>
            <div>{{ $post->created_at->format('jS F Y | h:i A') }}</div>
            
            @if(Auth::user()->id == $post->user->id OR Auth::user()->role == 'staff'  OR Auth::user()->role == 'admin')
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"> 
            @method('DELETE')
            @csrf
                <button type="submit" class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs mr-2">Elimina Post</button>
            </form>
            @endif
        </div>    
    </div>
</div>
@empty
    <div class="p-4">Ancora nessun post.</div>
@endforelse


<!-- RICHIESTA ACCESSO -->
@else
    @if( Auth::user()->requested()->where('responding_id', $blog->user_id)->exists() )
    <div class="flex items-center">
        <div class="mx-auto bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            Richiesta inoltrata    
        </div>
    </div>

    @else
    <form method="POST" action=" {{ route('requests.store', $blog->id) }} " class="flex items-center">
        @csrf
        <button type="submit" class="mx-auto bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
            Richiedi Accesso    
        </button>
    </form>
    @endif  
@endif

<br><br><br><br>

@endsection