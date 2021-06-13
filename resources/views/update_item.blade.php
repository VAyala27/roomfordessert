@extends('layouts.layout')

@section('content')
   <div class="container create-sweet mt-5">
        <h1 class="text-center mb-5">Create Item</h1>
        <form action="/" method="POST">
            @csrf
            <div class="form-group">
                <input type="file" class="form-control-file" id="img" name="img" value="{{$sweet->img}}">
              </div>
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" class="form-control" value="{{$sweet->name}}">
            </div>
            <div class="form-group">
                <label for="price">Price: </label>
                <input type="text" id="price" name="price" class="form-control" value="{{$sweet->price}}">
            </div>
            <div class="form-group">
                <label for="type">Type: </label>
                <select name="type" id="type" class="form-control">
                    <option value="cakes">Cakes</option>
                    <option value="cookies">Cookies</option>
                    <option value="ice-cream">Ice Cream</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-5 d-block mx-auto">Submit</button>
        </form>
    </div>
    @endsection