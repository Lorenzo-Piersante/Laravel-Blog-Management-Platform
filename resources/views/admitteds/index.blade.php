@extends ('layouts.app')
    
@section('content')

<div>
    @if( \Auth::user()->blog )
        <div class="font-bold text-lg">Utenti ammessi al tuo blog:</div>
        @foreach ( \Auth::user()->blog->admitted as $user )
            <div class="flex items-center py-2">
                <a href=" {{ route('users.show', $user->id) }} " class="flex items-center mb-5">
                    @if( $user->avatar )
                       <img src=" {{ asset('/storage/'. $user->avatar) }}" width="60" class="mr-4 rounded">
                    @else
                       <img src=" {{ asset('/images/default.png') }}" width="60" class="mr-4 rounded">
                    @endif
                        <h4 class="font-bold">{{ $user->name }}</h4>
                </a>
                <form action="{{ route('admitteds.destroy', $user->id )}}" method="POST">
                @method('DELETE')
                @csrf
                    <button class="rounded-full py-2 px-2 mb-5 border border-gray-400 text-black ml-12">Nega accesso</button>
                </form>
            </div>
        @endforeach
    @else
        <div class="mt-12 text-center font-bold text-lg">Non hai ancora un blog</div>
    @endif        
        
</div>

@endsection