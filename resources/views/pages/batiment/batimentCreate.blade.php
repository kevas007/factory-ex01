@extends("template.index")
@section('content')
    <div class="container">
        <form class="d-flex flex-column" action="/user" method="POST">
            @csrf
            <input placeholder="name" type="text" name="name" id="">
            <input placeholder="description" type="text" name="description" id="">
            <input type="submit" name="" id="" value="Sauvegarder">
        </form>
    </div>
@endsection
