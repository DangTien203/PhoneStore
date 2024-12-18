@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Detail</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $category->description }}</p>
                <p class="card-text"><strong>Nation:</strong> {{ $category->nation }}</p>
                <a href="/categorys" class="btn btn-warning">Back to List</a>
            </div>
        </div>
    </div>
@endsection