@extends('layouts.app')

@section('content')
<h2>Producten</h2>

@if(Auth::user()?->admin == 1)
<a href="{{route('create')}}">Create</a>
@endif
<div>

<form method="get" action="{{url('/search')}}">
<input type="text" name="search" placeholder="Zoek">
</form>

    <form method="get" action="{{url('/filter')}}">
        <select name="filter">
            @foreach($products as $product)
            <option value="{{$product->id}}">{{$product->price}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Zoek</button>
{{--        @dd('');--}}
    </form>

@foreach ($products as $product)

        <li>naam: {{$product['name']}}</li>
        <li>prijs: €{{$product['price']}}</li>

    @if(Auth::user()?->admin == 1)
    <a href="{{route('deleteProduct', ['id' => $product['id']])}}">delete</a>
    <a href="{{route('edit.products', ['id' => $product['id']])}}" >edit</a>

        @endif
    <a href="{{route('buy')}}">Kopen</a>

@endforeach


</div>


<a href="{{route('home')}}">Terug naar home page</a>


<p>
<a href="{{route('admin')}}">Admin page</a>
</p>
@endsection


