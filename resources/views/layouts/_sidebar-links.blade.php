<div class="bg-gray-200 border border-gray-300 rounded-lg py-2 px-8">
<ul class="">
    <li>
        <a class="font-bold text-red-400 hover:text-red-600 text-sm mb-4 block" target="_blank" href="docs/documentazione.pdf">Documentazione</a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('company') }} ">Azienda</a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('services') }} ">Servizi</a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('rules') }} ">Regolamento</a>
    </li>

    @auth
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('users.index') }} ">Ricerca Utenti</a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('blogs.index') }} ">Lista dei Blog</a>
    </li> 

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('users.show', auth()->user() ) }} ">Profilo</a>
    </li>
    
    @if(Auth::user()->blog) 
    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('admitteds.index') }} ">Ammessi al blog</a>
    </li>

    <li>
        <a class="font-bold text-lg mb-4 block hover:text-gray-600" href=" {{ route('requests.index') }} ">Richieste di accesso</a>
    </li>
    @endif

    @if(Auth::user()->role == 'admin')
        <li>
            <a class="font-bold text-red-800 text-lg mb-4 block hover:text-red-600" href=" {{ route('staffs.index') }} ">Gestione staff</a>
        </li>

        <li>
            <a class="font-bold text-red-800 text-lg mb-4 block hover:text-red-600" href=" {{ route('stats.home') }} ">Statistiche</a>
        </li>
    @endif

    @endauth
</ul>
</div>