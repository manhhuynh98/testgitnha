<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function list(){
        $this->authorize('view', 'App\Category');
        $category = Category::all();
        return view('admin.category.list',compact('category'));

    }

    public function postEdit($id){
        $category = Category::find($id);
        $category->name = $_POST['name'];
        $category->image = $_POST['image'];
        $category->save();
        return view('admin.category.edit',compact('category'));
    }

    public function getEdit($id){
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function postAdd(){
        $category = new Category;
        $category->name = $_POST['name'];
        $category->image = $_POST['image'];
        $category->save();
        return view('admin.category.add',compact('category'));
    }

    public function getDelete($id){
        $this->authorize('delete', 'App\Category');
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list');
    }

    public function getProduct($id){
        $product = Product::where('idCategory',$id)->paginate(10);
        return view('pages.product_for_category',compact('product'));
    }
}
