@extends ('layouts.app')
    
@section('content')

<div class="flex justify-center">
    <a href="{{ route('staffs.create') }}" ><div class="mx-auto bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Inserisci membro staff</div></a>
</div>

<hr class="my-12">

<div class="font-bold text-lg mb-8"> Membri Dello Staff: </div>

        @foreach ($users as $user)
        <div class="flex justify-between mb-5">
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
            <div class="flex flex-row-reverse">
            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="rounded-full py-1 px-2 mt-4 border border-gray-400 text-black ml-12">Elimina</button>
            </form>
            <a href="{{ route('users.edit', $user->id) }}" ><div class="rounded-full py-1 px-2 mt-4 border border-gray-400 text-black">Modifica</div></a>
            </div>
        </div>        
        @endforeach


@endsection