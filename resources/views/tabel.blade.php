@extends('layout.template')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody>
            {{-- loop point --}}
            @foreach ($points as $p)
            <tr>
                <td>{{$p -> id}}</td>
                <td>{{$p -> name}}</td>
                <td>{{$p -> description}}</td>
                <td> <img src="{{ asset('storage/images/' . $p->images) }}" alt="Image" width="100"> </td>
                <td>{{$p -> created_at}}</td>
                <td>{{$p -> updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
