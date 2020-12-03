@extends ('layouts.app')
    
@section('content')

    <!-- FILTRO -->    
    <div class="font-bold text-lg mb-8"> Cerca un utente: </div>
    
    <form method="GET" action="{{ route('users.filter') }}">     
        <div class="flex">
            <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" autocomplete="name" autofocus value="{{ old('name') }}" >
            <button class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs ml-4" type="submit"> Filtra </button>
        </div>
    </form>
    
    <hr class="my-16">



    <!-- INDEX --> 
    <div>
        @foreach ($users as $user)
            <a href=" {{ route('users.show', $user->id) }} " class="flex items-center mb-5">
                @if( $user->avatar )
                <img src=" {{ asset('/storage/'. $user->avatar) }}" width="60" class="mr-4 rounded">
                @else
                <img src=" {{ asset('/images/default.png') }}" width="60" class="mr-4 rounded">
                @endif

                <div>
                    <h4 class="font-bold">{{ $user->name }}</h4>
                </div>
            </a>
        @endforeach
    </div>

@endsection