@extends ('layouts.app')
    
@section('content')

<div class="mt-8 text-center font-bold text-6xl">Benvenuto su BlogFree!</div>
<div class="mt-8 mb-32 text-center text-gray-500 text-3xl">La piattaforma definitiva per la gestione del tuo blog</div>


<div class="grid grid-cols-3">

<div class="text-center px-6">
    <img class="object-cover shadow-md h-24 w-24 mb-2 rounded-full mx-auto" src=" {{ asset('/images/bill.jpg') }} ">
    <div class="text-lg font-bold mb-4">Bill Gates</div>
    <div class="text-gray-600 font-serif text-3xl">"</div>
    <div class="text-gray-600 text-lg">Un sito rivoluzionario a cui do tutto il mio supporto.</div>
    <div class="text-gray-600 font-serif text-3xl mt-4">"</div>
</div>

<div class="text-center px-6">
    <img class="object-cover shadow-md h-24 w-24 mb-2 rounded-full mx-auto" src=" {{ asset('/images/elon.jpg') }} ">
    <div class="text-lg font-bold mb-4">Elon Musk</div>
    <div class="text-gray-600 font-serif text-3xl">"</div>
    <div class="text-gray-600 text-lg">Semplicemente fantastico! Ora posso creare un blog completamente gratuito e condividere le ultime notizie della NASA.</div>
    <div class="text-gray-600 font-serif text-3xl mt-4">"</div>
</div>

<div class="text-center px-6">
    <img class="object-cover shadow-md h-24 w-24 mb-2 rounded-full mx-auto" src=" {{ asset('/images/linus.jpg') }} ">
    <div class="text-lg font-bold mb-4">Linus Torvalds</div>
    <div class="text-gray-600 font-serif text-3xl">"</div>
    <div class="text-gray-600 text-lg">Che dire, sono un grande fan dell' open source da sempre.</div>
    <div class="text-gray-600 font-serif text-3xl mt-4">"</div>
</div>

</div> 

@endsection