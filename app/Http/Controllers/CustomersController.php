<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class CustomersController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }
}
