@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Phone</h1>

        <form method="POST" action="{{ route('phones.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image_path">Image URL</label>
                <input type="text" name="image_path" id="image_path" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" disabled selected>Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required min="1">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="decimal" name="price" id="price" class="form-control" required min="1">
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
@endsection
