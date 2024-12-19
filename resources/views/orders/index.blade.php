@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Create Order</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Phone</th>
                <th>Order Date</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer->name }}</td>
                    <td>{{ $order->phone->name }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>${{ $order->total_price }}</td>
                    <td>
                        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
