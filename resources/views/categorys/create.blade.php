@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">Create New Category</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/categorys" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter category name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter category description">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nation" class="form-label">Nation</label>
                        <select id="nation" name="nation" class="form-select" required>
                            <option value="">-- Select Nation --</option>
                            <option value="Vietnam" {{ old('nation') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            <option value="USA" {{ old('nation') == 'USA' ? 'selected' : '' }}>USA</option>
                            <option value="China" {{ old('nation') == 'China' ? 'selected' : '' }}>China</option>
                            <option value="Japan" {{ old('nation') == 'Japan' ? 'selected' : '' }}>Japan</option>
                            <option value="Korea" {{ old('nation') == 'Korea' ? 'selected' : '' }}>Korea</option>
                        </select>
                    </div>

                    <div class="form-group text-end mt-4">
                        <button type="submit" class="btn btn-primary">Save Category</button>
                        <a href="/categorys" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
