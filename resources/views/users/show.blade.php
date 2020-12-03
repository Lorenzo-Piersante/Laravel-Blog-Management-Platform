@extends ('layouts.app')
    
    @section('content')
    	
        <div class="flex justify-between">
            @if( Auth::user()->id == $user->id  OR  Auth::user()->role == 'admin')
            <a href="{{ route('users.edit', $user->id) }}" class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs mr-2">Modifica Profilo</a>
            @endif
            
            @if( Auth::user()->role == 'admin' AND $user->role != 'admin')    
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                    <button type="submit" class="rounded-full py-2 px-4 border border-gray-400 text-black text-xs mr-2">Elimina Utente</button>
                </form>
            @endif
        </div>    

            @if( $user->avatar )
            <img class="h-32 w-32 rounded-full mx-auto" src=" {{ asset('/storage/'. $user->avatar) }} ">
        	@endif
            

            <div class="text-center mt-4">
        	    <h2 class="text-lg font-bold">{{ $user->name }}</h2>
        	    <div class="text-gray-600">{{ $user->birthday }}</div>
                <div class="text-gray-600">{{ $user->fiscalCode }}</div>
                <div class="text-gray-600">{{ $user->residency }}</div>
                <div class="text-gray-600">{{ $user->email }}</div>
                <div class="mt-4">{{ $user->description }}</div>
            </div> 
        

        <hr class="my-6">
        
        @if( $user->blog )
        <div class="text-center">
            <div class="text-lg font-bold">Blog dell utente:</div> 
            <a class="text-xl text-purple-500 hover:text-purple-700" href="{{ route('blogs.show', $user->blog->id ) }}">{{ $user->blog->title }}</a>
        </div>
        @else
            @if( Auth::user()->id == $user->id )
            <div class="text-center"><a class="text-xl text-red-500 hover:text-red-800" href=" {{ route('blogs.create') }} ">Crea il tuo blog!</a></div>
            @else
            <div class="text-center font-bold">L' utente non possiede ancora un blog</div>
            @endif
        @endif

@endsection

