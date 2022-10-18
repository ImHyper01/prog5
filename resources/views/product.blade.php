@extends('layouts.app')

@section('content')
<h2>Hier komen alle producten</h2>

<a href="{{route('create')}}">Create</a>

@foreach ($products as $product)

        <li>naam: {{$product['name']}}</li>
        <li>prijs: {{$product['price']}}</li>


    <a href="{{route('deleteProduct', ['id' => $product['id']])}}" >delete</a>
    <a href="{{route('edit.product', ['id' => $product['id']])}}" >edit</a>
@endforeach

<a href="{{route('home')}}">Terug naar home page</a>
@endsection


