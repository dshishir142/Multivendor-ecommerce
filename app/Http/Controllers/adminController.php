<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class adminController extends Controller
{
    public function index(){
        return view('admin.user');
    }
    public function seller(){
        return view('admin.seller');
    }
    public function products(){
        return view('admin.products');
    }
    public function role(){
        return view('admin.role');
    }
    public function category(){
        $categories = Category::all();
        return view('admin.category')->with('categories', $categories);
    }

    public function addCategory(Request $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect(route('admin.category'));
    }
}
