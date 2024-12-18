<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phone;
use App\Models\Category;

class PhonesController extends Controller
{
    //home of phones
    public function index()
    {
        $phones = Phone::with('category')->get();
        return view('phones.index', compact('phones'));
    }

    //Create function
    public function create()
    {
        $categories = Category::all();
        return view('phones.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'required|url',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Phone::create($request->all());
        return redirect()->route('phones.index')->with('success', 'Phone created successfully');
    }

    //Update function
    public function edit($id)
    {
        $phone = Phone::findOrFail($id);
        $categories = Category::all();
        return view('phones.edit', compact('phone', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'required|url',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $phone = Phone::findOrFail($id);
        $phone->update($request->all());
        return redirect()->route('phones.index')->with('success', 'Phone updated successfully');
    }

    //Delete function
    public function destroy($id)
    {
        Phone::destroy($id);
        return redirect()->route('phones.index')->with('success', 'Phone deleted successfully');
    }

    public function shopping()
    {
        $phones = Phone::with('category')->get();
        return view('phones.shopping', compact('phones'));
    }

    public function show($id)
    {
        $phone = Phone::with('category')->findOrFail($id);
        return view('phones.show', compact('phone'));
    }

    public function detail($id)
    {
        $phone = Phone::with('category')->find($id);
        return view('phones.show', compact('phone'));
    }
}
