@extends('layouts.app')

@section('content')

<a href="{{ route('Categories.create') }}" class="btn btn-primary">Create</a>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $index => $category)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->dec }}</td>
            <td>
                <a href="" data-bs-toggle="modal" data-bs-target="#category{{ $category->id }}">
                    View
                </a>
                |
                <a href="{{ route('Categories.edit', $category->id) }}">
                    Update
                </a>
                |
                <a href="" data-bs-toggle="modal" data-bs-target="#deleteCategory{{ $category->id }}">
                    Delete
                </a>

                @include('categories.show')
                @include('categories.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection