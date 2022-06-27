@extends('layouts.app')

@section('content')

<div class="container py-5">
  <h1>Create Comic</h1>


  <form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Superman " aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Add the comic title here</small>
    </div>
    <div class="mb-3">
      <label for="thumb" class="form-label">thumb</label>
      <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https:// " aria-describedby="thumbHelper">
      <small id="thumbHelper" class="text-muted">Add the comic thumb here</small>
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">price</label>
      <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="https:// " aria-describedby="priceHelper">
      <small id="priceHelper" class="text-muted">Add the comic price here</small>
    </div>
    <div class="mb-3">
      <label for="series" class="form-label">series</label>
      <input type="text" name="series" id="series" class="form-control" placeholder="type a series name here " aria-describedby="seriesHelper">
      <small id="seriesHelper" class="text-muted">Add the comic series here</small>
    </div>
    <div class="mb-3">
      <label for="sale_date" class="form-label">sale_date</label>
      <input type="date" name="sale_date" id="sale_date" class="form-control" aria-describedby="sale_dateHelper">
      <small id="sale_dateHelper" class="text-muted">Add the comic thumb here</small>
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">type</label>
      <input type="text" name="type" id="type" class="form-control" placeholder="type a type name here " aria-describedby="typeHelper">
      <small id="typeHelper" class="text-muted">Add the comic type here</small>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Body</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Add Comic</button>

  </form>
</div>

@endsection