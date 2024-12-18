@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Phone</h1>

        <form method="POST" action="{{ route('phones.update', $phone->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $phone->name }}" required>
            </div>

            <div class="form-group">
                <label for="image_path">Image URL</label>
                <input type="text" name="image_path" id="image_path" class="form-control" value="{{ $phone->image_path }}" required>
            </div>

            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $phone->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $phone->quantity }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
