@extends('layouts.admin')

@section('content')

<div class="container py-5">
    <h1>Edit Comic</h1>
    @include('partials.errors')


    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Superman " aria-describedby="titleHelper" value="{{old('title', $comic->title)}}">
            <small id="titleHelper" class="text-muted">Add the comic title here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https:// " aria-describedby="thumbHelper" value="{{old('thumb', $comic->thumb)}}">
            <small id="thumbHelper" class="text-muted">Add the comic thumb here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="https:// " aria-describedby="priceHelper" value="{{old('price', $comic->price)}}">
            <small id="priceHelper" class="text-muted">Add the comic price here</small>
        </div>

        <div class="mb-3">
            <label for="serie_id" class="form-label">Series</label>
            <select class="form-control" name="serie_id" id="serie_id">
                <option>Select a Serie</option>

                @forelse ($series as $serie)
                <!-- TODO Fix old not keeping its value -->
                <option value="{{$serie->id}}" {{ $comic->serie->id == old('serie_id', $serie->id) ? 'selected' : ''}}>{{$serie->name}}</option>
                @empty
                <option>No series defined!</option>
                @endforelse

            </select>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHelper" value="{{old('sale_date', $comic->sale_date)}}">
            <small id="sale_dateHelper" class="text-muted">Add the comic thumb here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="type a type name here " aria-describedby="typeHelper" value="{{old('type', $comic->type)}}">
            <small id="typeHelper" class="text-muted">Add the comic type here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Body</label>
            <textarea class="form-control" name="description" id="description" rows="5">
            {{old('description', $comic->description)}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>

    </form>
</div>
@endsection
