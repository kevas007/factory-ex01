@extends('partials.index')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $formation )
            <tr>
                <th scope="row">{{ $formation->id }}</th>
                <td>{{ $formation->name  }}</td>
                <td class="d-flex">
                    <a href="/formation/{{ $formation->id }}" class="btn btn-success text-white">SHOW</a>
                    <form action="/formation/{{ $formation->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger text-white" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/formation/create" class="btn btn-primary text-white">Create une formation</a>
</div>

@endsection
