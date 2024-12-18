<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategorysController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categorys.index',['categories' => $categories]);
    }

    public function create() {
        return view('categorys.create');
    }

    public function store(Request $request) {
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->nation = $request->input('nation');
        $category->save();

        return redirect('/categorys');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categorys.show', compact('category'));
    }
    
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect('/categorys');
    }
    
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categorys.edit', compact('category'));
    }
    
    public function update(Request $request, $id)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'nation' => 'required|string|max:255',
        ]);
    
        // Lấy category và cập nhật thông tin
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->nation = $request->input('nation');
        $category->save();
    
        // Chuyển hướng về danh sách với thông báo
        return redirect('/categorys');
    }
    
}
