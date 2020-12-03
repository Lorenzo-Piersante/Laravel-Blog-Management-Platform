@extends('layouts.master')


@section('auth')
<div class="lg:w-1/6 text-blue-500 text-lg font-semibold mt-4"> 
    @auth
        <form method="POST" action="{{ route('logout') }}"> 
            @csrf
            <button class="hover:text-blue-700 font-semibold">Esci</button>
        </form>
    @else
        <a class="hover:text-blue-700 mr-4" href="{{ route('login') }}">Accedi</a>
        <a class="hover:text-blue-700" href="{{ route('register') }}">Registrati</a>
    @endauth
</div>
@endsection

@section('stuff')
    <main class="container mx-auto">
        <div class="flex">
            <div class="mr-12 lg:w-1/6 md:w-1/4 sm:w-1/3 w-1/2">   
                @include ('layouts._sidebar-links')
            </div>
        
            <div class="flex-1">
                @yield ('content')
            </div>
        </div>
    </main>
@endsection