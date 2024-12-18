@extends('layouts.app')

@section('content')
    <a href="/customers/create" class="btn btn-primary" >Create new Customer</a>
    <h1>Customer List</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->description }}</td>
                    <td>{{ $customer->nation }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/customers/' . $customer->id) }}">Detail</a>
                        <a class="btn btn-primary" href="{{ url('/customers/edit/' . $customer->id) }}">Edit</a>
                        <form action="/customers/delete/, {{ $customer->id }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection