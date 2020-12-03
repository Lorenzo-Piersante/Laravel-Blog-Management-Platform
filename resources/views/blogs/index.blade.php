@extends ('layouts.app')
    
@section('content')

    <div class="font-bold text-lg mb-8"> Lista dei blog attivi: </div>

    @foreach ($blogs as $blog)
        <div class="flex justify-between">    
            <a href=" {{ route('blogs.show', $blog->id) }} " class="flex items-center mb-8">
                    <img src="{{ asset('/images/default2.png') }}" width="30" class="mr-4 rounded">                          
                    <div class="font-bold">{{ $blog->title }}</div>
            </a>
            
            @if(Auth::user()->role == 'admin')
               <a href="{{ route('admitteds.index_admin', $blog->id) }}" ><div class="rounded-full py-1 px-2 border border-gray-400 text-black">Lista iscritti</div></a>
            @endif
        </div>
    @endforeach

@endsection