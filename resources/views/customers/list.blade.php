@extends('layouts.app')
@session('content')

<h1>Customers list</h1>
<a href="/customers" class="btn btn-primary me-2">Customers</a>
<a href="/movies" class="btn btn-warning text-white">Movies</a>
<a href="{{ route('Customers.create') }}">Create</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->gender }}</td>
            <td>
                <a href="" data-bs-toggle="modal" data-bs-target="#customer{{$customer->id}}">View</a>
                |
                <a href="">Update</a>
                |
                <a href=""
                    data-bs-toggle="model"
                    data-bs-target="#deleteCustomer{{ $customer->id }}">
                    Delete</a>
                @include('customers.show')
                @include('customers.delete')
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsession