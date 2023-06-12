@extends('layouts.main')



@section('content')
    <div class="container vh-100 text-center">


        <h1 class="text-center py-5">{{$comic->title}}</h1>
        <img height="300px" src="{{$comic->thumb}}" alt="">
        <h4>Genre : {{$comic->type}}</h4>
        <h4>Series: {{$comic->series}}</h4>
        <h4>Price: {{$comic->price}}</h4>
        <h4>Price: {{$comic->sale_date}}</h4>

        <h4>  Description:</h4>
        <p>{{$comic->description}}</p>


    </div>
        @endsection
