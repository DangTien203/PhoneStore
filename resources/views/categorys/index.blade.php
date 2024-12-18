@extends('layouts.app')

@section('content')
    <a href="/categorys/create" class="btn btn-primary" >Create Category</a>
    <h1>Category List</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Nation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->nation }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/categorys/' . $category->id) }}">Detail</a>
                        <a class="btn btn-primary" href="{{ url('/categorys/edit/' . $category->id) }}">Edit</a>
                        <form action="/categorys/delete/, {{ $category->id }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection