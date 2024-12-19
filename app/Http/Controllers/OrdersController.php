<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Phone;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with('customer', 'phone')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $customers = Customer::all();
        $phones = Phone::all();
        return view('orders.create', compact('customers', 'phones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'phone_id' => 'required|exists:phones,id',
            'order_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $phone = Phone::find($request->phone_id);
    
        $order = Order::create([
            'customer_id' => $request->customer_id,
            'phone_id' => $request->phone_id,
            'order_date' => $request->order_date,
            'quantity' => $request->quantity,
            'total_price' => $phone->price * $request->quantity,
        ]);
    
        return redirect()->route('orders.index');
    }

    public function edit(Order $order)
    {
        $customers = Customer::all();
        $phones = Phone::all();
        return view('orders.edit', compact('order', 'customers', 'phones'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'phone_id' => 'required|exists:phones,id',
            'order_date' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $phone = Phone::find($request->phone_id);
    
        $order->update([
            'customer_id' => $request->customer_id,
            'phone_id' => $request->phone_id,
            'order_date' => $request->order_date,
            'quantity' => $request->quantity,
            'total_price' => $phone->price * $request->quantity,
        ]);
    
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
    
}
