@extends ('layouts.app')
    
    @section('content')

	<h1 class="uppercase tracking-wide text-xl text-center text-indigo-600 font-bold mb-10">Azienda</h1>
   
    <div class="md:flex mb-10">
        <div class="md:flex">
            <img class="rounded-lg md:w-56" src="images/company1.jpeg">
        </div>
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">WebFree S.P.A.</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Un azienda di servizi gratuiti</p>
                <p class="mt-2 text-gray-600">WebFree S.P.A. nasce nel 2018 da un idea di Giovanni Paoletti con lo scopo di creare una serie di siti che forniscano servizi gratuiti agli utenti.</p>
        </div>
    </div>
    
    <div class="md:flex mb-10">
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Contatti:</div>
                <p class="mt-2 text-gray-600">Hai bisogno di aiuto per la creazione del tuo account? Vuoi darci qualche suggerimento su come migliorare il sito? Contattaci!</p>
                <div class="md:flex">
                    <p class="block mt-1 mr-2 text-lg leading-tight font-semibold text-gray-900 hover:underline">Mail:</p>
                    <p class="mt-1 text-gray-600">WebFree@mail.it</p>
                </div>
                <div class="md:flex">
                    <p class="block mt-1 mr-2 text-lg leading-tight font-semibold text-gray-900 hover:underline">Telefono:</p>
                    <p class="mt-1 text-gray-600">3890046548</p>
                </div>
        </div>
        <div class="md:flex ml-2">
            <img class="rounded-lg md:w-56" src="images/company2.jpg">
        </div>
    </div>

    @endsection