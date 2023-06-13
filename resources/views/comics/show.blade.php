@extends('layouts.main')



@section('content')
    <div class="container vh-100 text-center">


        <h1 class="text-center py-5">{{$comic->title}}</h1>
        <img height="300px" src="{{$comic->thumb}}" alt="">
        <h4>Slug  : {{$comic->slug}}</h4>
        <h4>Genre : {{$comic->type}}</h4>
        <h4>Series: {{$comic->series}}</h4>
        <h4>Price: {{$comic->price}}</h4>
        <h4>Price: {{$comic->sale_date}}</h4>

        <h4>  Description:</h4>
        <p>{{$comic->description}}</p>

        <div class="d-flex justify-content-center">
            <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary">Edit</a>
            <form
            class="ms-3"
            action="{{route('comics.destroy', $comic)}}"
            method="POST"
            onsubmit="return confirm('If you confirm, {{ $comic->title }} will be deleted forever')">
            @csrf
            @method('DELETE')

              <button type="submit" href="{{route('comics.destroy', $comic)}}" class="btn btn-danger">
                  Delete
              </button>
          </form>
        </div>


    </div>
        @endsection
