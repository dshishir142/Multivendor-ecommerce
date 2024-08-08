<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\sellerInfo;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class adminController extends Controller
{
    public function index(){
        return view('admin.user');
    }
    public function seller(){

        $sellerToApprove = $this->sellerToApprove();

        return view('admin.seller')->with('sellerToApprove', $sellerToApprove);

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

    public function sellerToApprove(){
        $seller = User::where('role_id', 2)->whereHas('getSellerInfo', function($query){
            $query->where('isActive', 0);
        })
        ->with('getSellerInfo')
        ->get();
        return $seller;
    }

    public function approveSeller(string $id){
        $seller = sellerInfo::where('seller_id', $id)->first();
        $seller->isActive = 1;
        $seller->save();

        return redirect(route('admin.seller'));
    }
}
