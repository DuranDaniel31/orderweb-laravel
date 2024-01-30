
@extends('templates2.base')
@section('title','Test')
@section('content')
<h1>
    Test 2
</h1>
<q>
   No soy hombre de plegarias, pero si estas en el cielo, ¡Salvame, por favor, Superman!
</q>
<small>
    Homero j. Simpson
</small>
<br>
<button onclick="show_alert()">Clic!</button>

<script src ="{{ asset('js/test.js') }}"></script>
@endsection
