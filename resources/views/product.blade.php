<h2>Hier komen alle producten</h2>


@foreach ($products as $product)
    <li>{{$product['name']}}</li>
    <li>{{$product['price']}}</li>
@endforeach

<a href="{{route('home')}}">Terug naar home page</a>


