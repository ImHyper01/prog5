@extends('layouts.app')

@section('content')
<form action="{{route('create.post')}}" method="post">
    @csrf {{ csrf_field() }}
    <label for="title">name</label>
    <input type="text" name="name">
    <label for="body">price</label>
    <input type="number" name="price">
    <button>Send</button>
</form>
<p>
    <a href="{{route('productController')}}">Terug naar product page</a>
</p>
@endsection
