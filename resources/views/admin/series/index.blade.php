@extends('layouts.admin')


@section('content')




@include('partials.errors')

<div class="container">
    <h1 class="my-3">All Series</h1>
    <div class="row">
        <div class="col pe-5">
            <form action="{{route('admin.series.store')}}" method="post" class="d-flex align-items-center">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
                </div>
            </form>
        </div>
        <div class="col">

            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Comics Count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($series as $serie)
                    <tr>
                        <td scope="row">{{$serie->id}}</td>
                        <td>
                            <form id="serie-{{$serie->id}}" action="{{route('admin.series.update', $serie->slug)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <input class="border-0 bg-transparent" type="text" name="name" value="{{$serie->name}}">
                            </form>

                        </td>
                        <td>{{$serie->slug}}</td>
                        <td><span class="badge badge-info bg-dark text-white">{{count($serie->comics)}}</span></td>
                        <td>
                            <button form="serie-{{$serie->id}}" type="submit" class="btn btn-primary">Update</button>
                            <form action="{{route('admin.series.destroy', $serie->slug)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td scope="row">No categories! Add your first serie.</td>

                    </tr>
                    @endforelse
                </tbody>
            </table>


        </div>

    </div>
</div>


@endsection
