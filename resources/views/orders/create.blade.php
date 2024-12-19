@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_id">Customer</label>
            <select name="customer_id" class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="phone_id">Phone</label>
            <select name="phone_id" class="form-control">
                @foreach ($phones as $phone)
                    <option value="{{ $phone->id }}">{{ $phone->name }} - ${{ $phone->price }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="order_date">Order Date</label>
            <input type="date" name="order_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" min="1" max="{{ $phone->quantity }}">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
