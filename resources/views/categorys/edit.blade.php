@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/categorys/update/{{ $category->id }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nation" class="form-label">Nation</label>
                        <select id="nation" name="nation" class="form-select" required>
                            <option value="">-- Select Nation --</option>
                            <option value="Vietnam" {{ $category->nation == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            <option value="USA" {{ $category->nation == 'USA' ? 'selected' : '' }}>USA</option>
                            <option value="China" {{ $category->nation == 'China' ? 'selected' : '' }}>China</option>
                            <option value="Japan" {{ $category->nation == 'Japan' ? 'selected' : '' }}>Japan</option>
                            <option value="Korea" {{ $category->nation == 'Korea' ? 'selected' : '' }}>Korea</option>
                        </select>
                    </div>

                    <div class="form-group text-end mt-4">
                        <button type="submit" class="btn btn-success">Update Category</button>
                        <a href="/categorys" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
