<form action="{{route('post.product', ['id' => $id])}}" method="post">
    @csrf {{ csrf_field() }}
    <label for="title">name</label>
    <input type="text" name="name">
    <label for="body">price</label>
    <input type="number" name="price">
    <button>Send</button>
</form>

