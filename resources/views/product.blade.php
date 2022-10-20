@extends('layouts.app')

@section('content')
<h2>Producten</h2>

@if(Auth::user()?->admin == 1)
<a href="{{route('create')}}">Create</a>
@endif
<div>

<form method="get" action="{{url('/search')}}">
<input type="text" name="search" placeholder="Zoek">


@foreach ($products as $product)

        <li>naam: {{$product['name']}}</li>
        <li>prijs: {{$product['price']}}</li>

    @if(Auth::user()?->admin == 1))
    <a href="{{route('deleteProduct', ['id' => $product['id']])}}" >delete</a>
    <a href="{{route('edit.product', ['id' => $product['id']])}}" >edit</a>
        @endif
    <a href="{{route('buy')}}">Kopen</a>
@endforeach


</form>

</div>

<a href="{{route('home')}}">Terug naar home page</a>
@endsection


