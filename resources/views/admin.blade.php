@extends('layouts.app')

@section('content')

@foreach ($products as $product)

    <li>naam: {{$product['name']}}</li>
    <li>prijs: €{{$product['price']}}</li>

    @if(Auth::user()?->admin == 1)
        <a href="{{route('deleteProduct', ['id' => $product['id']])}}">delete</a>
        <a href="{{route('edit.products', ['id' => $product['id']])}}" >edit</a>
    @endif

        @if($products->status == 1)
        <form action="{{route('status')}}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" value="{{$products->id}}">
            <input type="hidden" name="status" value="1">
            <button class="btn-primary" type="submit">disable</button>
        </form>
    @else
        <form action="{{route('status')}}" method="post">
            @csrf
            @method('PATCH')

            <input type="hidden" name="id" value="{{$products->id}}">
            <input type="hidden" name="status" value="0">
            <button type="submit">enable</button>
        </form>
    @endif

@endforeach

@endsection
