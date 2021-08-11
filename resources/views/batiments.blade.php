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
            @foreach ($batiments as $batiment )
            <tr>
                <th scope="row">{{ $batiment->id }}</th>
                <td>{{ $batiment->name  }}</td>
                <td class="d-flex">
                    <a href="/batiment/{{ $batiment->id }}" class="btn btn-success text-white">SHOW</a>
                    <form action="/batiment/{{ $batiment->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger text-white" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
