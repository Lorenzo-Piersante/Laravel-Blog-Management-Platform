@extends ('layouts.app')
    
    @section('content')

	<h1 class="uppercase tracking-wide text-xl text-center text-indigo-600 font-bold mb-10">Servizi</h1>
    
    <div class="md:flex mb-10">
        <div class="md:flex">
            <img class="rounded-lg md:w-56" src="images/services1.jpg">
        </div>
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Apri un blog</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Ti diamo la possibilità di aprire un blog personale</p>
                <p class="mt-2 text-gray-600">Iscrivendoti al nostro sito ti verrà assegnato un blgo personale su cui postare i tuoi contenut e condividerli con gli altri.</p>
        </div>
    </div>
    
    <div class="md:flex mb-10">
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Gratis per sempre</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Il tuo blog sarà sempre gratuito</p>
                <p class="mt-2 text-gray-600">Il nostro servizio è e rimarrà sempre gratuito per tutti gli utenti, in linea con le nostre politiche aziendali.</p>
        </div>
        <div class="md:flex">
            <img class="rounded-lg md:w-56 ml-2" src="images/services2.jpg">
        </div>
    </div>
    
    <div class="md:flex mb-10">
        <div class="md:flex">
            <img class="rounded-lg md:w-56" src="images/services3.jpg">
        </div>
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Sicurezza completa</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Le tue informazioni saranno protette</p>
                <p class="mt-2 text-gray-600">Le informazioni degli utenti sono protette dalle tecnologie del framework Laravel per garantire la sicurezza.</p>
        </div>
    </div>

    @endsection