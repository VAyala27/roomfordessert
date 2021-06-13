@extends('layouts.layout')

@section('content')
<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Type</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sweets as $sweet)
            <tr>
                <th scope="row">{{ $sweet->id }}</th>
                <td><img src="{{ $sweet->img }}" class="img-fluid list-item" alt="{{ $sweet->name }}"></td>
                <td>{{ $sweet->name }}</td>
                <td>{{ $sweet->price }}</td>
                <td>{{ $sweet->type }}</td>
                <td><i class="fas fa-edit"></i></td>
                <td><a href='delete/{{$sweet->id}}'><i class="fas fa-trash-alt text-danger"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    @endsection 