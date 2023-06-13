@extends('layouts.main')



@section('content')
    <div class="container vh-100">


        @if ($errors->any())

            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)

                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label"><strong>Title</strong></label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" placeholder="Product name" value="{{old('title', $comic->title)}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label"><strong>Thumb</strong></label>
                <input type="text" class="form-control" id="thumb" aria-describedby="emailHelp" name="thumb" placeholder="Image URL" value="{{old('thumb', $comic->thumb)}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label"><strong>Price</strong></label>
                <input type="text" class="form-control" id="price" aria-describedby="emailHelp" name="price" placeholder="Price"  value="{{old('price', $comic->price)}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label"><strong>Series</strong></label>
                <input type="text" class="form-control" id="series" aria-describedby="emailHelp" name="series" placeholder="Series" value="{{old('series', $comic->series)}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label"><strong>Launch Date</strong> </label>
                <input type="date" class="form-control" id="sale_date" aria-describedby="emailHelp" name="sale_date" placeholder="Launch Date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label"><strong>Type</strong></label>
                <input type="text" class="form-control" id="type" aria-describedby="emailHelp" name="type" placeholder="Genre" value="{{old('type', $comic->type)}}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label"><strong>Artists</strong></label>
                <input type="text" class="form-control" id="artists" aria-describedby="emailHelp" name="artists" placeholder="Divide names with ', '" value="{{old('artists', $comic->artists)}}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label"><strong>Writers</strong></label>
                <input type="text" class="form-control" id="writers" aria-describedby="emailHelp" name="writers" placeholder="Divide names with ', '" value="{{old('writers', $comic->writers)}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label"><strong>Description</strong></label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Put here the description">{{old('description', $comic->description)}}</textarea>
            </div>

            <div class="text-center">

                <button type="submit" class="btn btn-success ">
                    Update
                </button>
            </div>
        </form>


    </div>
        @endsection
