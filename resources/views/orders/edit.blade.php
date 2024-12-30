@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_id">Customer</label>
            <select name="customer_id" class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $order->customer_id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="phone_id">Phone</label>
            <select name="phone_id" class="form-control">
                @foreach ($phones as $phone)
                    <option value="{{ $phone->id }}" {{ $phone->id == $order->phone_id ? 'selected' : '' }}>
                        {{ $phone->name }} - ${{ $phone->price }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="order_date">Order Date</label>
            <input type="date" name="order_date" class="form-control" value="{{ $order->order_date }}">
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}" min="1" max="{{ $phone->quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
