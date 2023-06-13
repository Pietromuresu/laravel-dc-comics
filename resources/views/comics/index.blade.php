@extends('layouts.main')



@section('content')
    <div class="container vh-100">


        <h1 class="text-center py-5">All Comics</h1>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Price</th>
                <th scope="col">Launch Date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>

                    <th scope="row">{{$comic->id}}</th>
                    <th scope="row">{{$comic->title}}</th>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td><a href="{{route('comics.show', $comic)}}" class="btn btn-primary"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a></td>
                    <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a></td>
                    <td><a href="{{route('comics.show', $comic)}}" class="btn btn-primary"><i class="fa-regular fa-trash-can"></i></a></td>
                </tr>
                @endforeach

            </tbody>
          </table>

    </div>
        @endsection
