@extends ('layouts.app')
    
@section('content')

<div class="font-bold text-lg mb-8"> Statistiche amministrative: </div>

<div>Numero totale di blog attivi: <b>{{ \App\Blog::all()->count() }}</b></div>

<div>Numero medio di post per blog: <b>{{ ( \App\Post::all()->count() )/( \App\Blog::all()->count() )  }}</b></div>

<?php 
    $admissions = 0;
    foreach ( \App\Blog::all() as $blog) {
        $admissions += $blog->admitted->count();	
    }	
?>
<div>Numero medio di iscritti per blog: <b>{{ ( $admissions )/( \App\Blog::all()->count() ) }}</b> </div>

@endsection