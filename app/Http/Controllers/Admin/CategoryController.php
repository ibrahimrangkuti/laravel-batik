<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::allw();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'description' => ['min:3']
        ]);

        $name = $request->name;
        $slug = Str::slug($name);
        $description = $request->description;
        if(Category::where('slug', $slug)->first()) {
            return back()->with('error', 'Data kategori sudah ada');
        }

        Category::create([
            'slug' => $slug,
            'name' => Str::ucfirst($name),
            'description' => $description
        ]);

        Alert::toast('Data kategori berhasil ditambahkan!', 'success');
        return redirect(route('admin.category.index'));
    }

    public function delete(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        if(!$category) {
            Alert::error('Gagal', 'Data kategori tidak ditemukan!');
            return back();
        }

        $category->delete();
        Alert::toast('Data kategori berhasil dihapus!', 'success');
        return back();
    }
}
