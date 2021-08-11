@extends('partials.index')

@section('content')
<div class="container">
    <p><strong>Nom:</strong>{{ $show->name }}</p>
<p><strong>Description:</strong>{{ $show->description }}</p>
<a href="/batiment/{{ $show->id }}/edit" class="btn btn-primary text-white mx-3">Editer</a>
</div>
@endsection
