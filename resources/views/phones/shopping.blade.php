@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Phone Store</h1>
        <div class="row">
            @foreach ($phones as $phone)
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ $phone->image_path }}" class="card-img-top" alt="{{ $phone->name }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $phone->name }}</h5>
                            <p class="card-text"><strong>Category:</strong> {{ $phone->category->name }}</p>
                            <p class="card-text"><strong>Quantity:</strong> {{ $phone->quantity }}</p>
                            <a href="{{ route('phones.show', $phone->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
