@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Phones List</h1>
        <a href="{{ route('phones.create') }}" class="btn btn-success mb-3">Create Phone</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($phones as $phone)
                    <tr>
                        <td>{{ $phone->id }}</td>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->category->name }}</td>
                        <td>{{ $phone->quantity }}</td>
                        <td>
                            <a href="{{ route('phones.show', $phone->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
