@extends('layouts.app')


@section('content')

<div class="container">

  <div class="heading">
    <h1>All Comics</h1>
    <div>
      <a class="btn btn-primary" href="{{route('comics.create')}}" role="button">Add Comic</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Thumb</th>
        <th>Title</th>
        <th>Series</th>
        <th>Price</th>
        <th>Sale Date</th>
        <th>Type</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($comics as $comic)
      <tr>
        <td scope="row">{{$comic->id}}</td>
        <td><img width="100" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
        <td>{{$comic->title}}</td>
        <td>{{$comic->series}}</td>
        <td>{{$comic->price}}</td>
        <td>{{$comic->sale_date}}</td>
        <td>{{$comic->type}}</td>
        <td>
          <a href="{{route('comics.show', $comic->id)}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
            </svg>
          </a> - Edit - Delete
        </td>
      </tr>
      @empty
      <tr>
        <td scope="row">No comics Yet!</td>
      </tr>
      @endforelse
    </tbody>
  </table>

</div>

@endsection