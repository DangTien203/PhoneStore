@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Phone Details</h1>
        <div class="card mb-3" style="max-width: 800px; margin: auto;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $phone->image_path }}" class="card-img" alt="{{ $phone->name }}" style="object-fit: cover; height: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $phone->name }}</h2>
                        <p class="card-text"><strong>Category:</strong> {{ $phone->category->name }}</p>
                        <p class="card-text"><strong>Quantity:</strong> {{ $phone->quantity }}</p>
                        <p class="card-text">
                            <small class="text-muted">Created at: {{ $phone->created_at->format('d M, Y') }}</small>
                        </p>
                        <h3 class="card-title">${{ $phone->price }}</h3>
                        <a href="/phones" class="btn btn-primary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
