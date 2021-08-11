@extends("partials.index")
@section('content')
    <div class="container">
        <form class="d-flex flex-column" action="/batiment/{{ $edit->id }}" method="POST">
            @csrf
            @method("PUT")
            <input value="{{ $edit->name }}" placeholder="name" type="text" name="name" id="">
            <input value="{{ $edit->description }}" placeholder="description" type="text" name="description" id="">
            <input type="submit" name="" id="" value="Sauvegarder">
        </form>
    </div>
