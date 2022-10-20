@extends('layouts.app')

@section('content')
<h2>Welcome op de home page</h2>

<ul style="list-style: none">
    <li><a href="{{route('productController')}}">Producten</a></li>
    <li><a href="{{route('home')}}">inlog pagina</a></li>
</ul>
@endsection
