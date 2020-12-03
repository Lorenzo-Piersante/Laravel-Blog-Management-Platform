@extends ('layouts.app')
    
    @section('content')
    <h1 class="uppercase tracking-wide text-xl text-center text-indigo-600 font-bold mb-10">Regolamento</h1>
    
    <div class="md:flex mb-10">
        <div class="md:flex">
            <img class="rounded-lg md:w-56" src="images/rules1.jpg">
        </div>
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Rispetta gli altri</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Dietro ad ogni computer c’è una persona</p>
                <p class="mt-2 text-gray-600">Se scrivi un poste fallo per portare un valore aggiunto, scrivi qualcosa per creare un contenuto interessante e non per accendere litigi.</p>
        </div>
    </div>
    
    <div class="md:flex mb-10">
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Occhio al copyright</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Attenzione ai diritti sui tuoi post</p>
                <p class="mt-2 text-gray-600">Per i tuoi contenuti non rubare le foto da Google. Assicurati di avere il diritto di utilizzo dei materiali. Sempre.</p>
        </div>
        <div class="md:flex">
            <img class="rounded-lg md:w-56 ml-4" src="images/rules2.jpg">
        </div>
    </div>
    
    <div class="md:flex mb-10">
        <div class="md:flex">
            <img class="rounded-lg md:w-56" src="images/rules3.png">
        </div>
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">No alle discriminazioni</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Non postare contenuti discriminatori</p>
                <p class="mt-2 text-gray-600">Sono vietati post che possano incitare all' odio verso persone specifiche o gruppi di persone in qualsiasi forma.</p>
        </div>
    </div>

    <div class="md:flex mb-10">
        <div class="mt-4 md:mt-0 md:ml-6">
            <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">Solo notizie verificate</div>
                <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Non promuovere la disinformazione</p>
                <p class="mt-2 text-gray-600">Non fomentare le fake news: se non sei certo della veridicità di una notizia, controlla prima di condividerla.</p>
        </div>
        <div class="md:flex">
            <img class="rounded-lg md:w-56 ml-4" src="images/rules4.jpg">
        </div>
    </div>
    @endsection
