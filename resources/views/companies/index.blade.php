@extends('Layouts.app')

@section('content')
    <h1 style="margin-top: 20px">Edit Company</h1>
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $comp)
                        <tr>
                            <td>{{ $comp->id }}</td>
                            <td>{{ $comp->name }}</td>
                            <td>{{ $comp->code }}</td>
                            <td>{{ $comp->address }}</td>
                            <td>{{ $comp->city }}</td>
                            <td>{{ $comp->country }}</td>
                            <td>
                                <a href="/companies/edit/{{ $comp->id }}" class="edit" title="Edit" data-toggle="tooltip"><i
                                        class="material-icons">&#xE254;</i></a>
                                <a href="/companies/delete/{{ $comp->id }}" class="delete" title="Delete" data-toggle="tooltip"><i
                                        class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="/companies/create" class="btn btn-primary">Create</a>
        </div>
    </div>

@endsection
