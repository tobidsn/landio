<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Search;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Capsule\Manager as DB; 

class GuestController extends Controller
{
    public function index()
    {   
        $products = Product::where('status', 'Y')->paginate(6);
        return view('guest.index', compact('products'));
    }

    public function category()
    {   
        $category = Category::has('products')->paginate(6);

        return view('guest.category', compact('category'));
    }

    public function shop()
    {   
        $products = Product::where('status', 'Y')->paginate(6);
        return view('guest.shop', compact('products'));
    }

    public function work()
    {
        return view('guest.about');
    }

    public function show($id)
    {   
        Product::where('slug', $id)->increment('counter', 1);

        $product = Product::where('slug', $id)
                            ->where('status', 'Y')
                            ->with('category')
                            ->first();

        if ($product == null) {
            abort(404);
        }
        
        $related = Product::where('category_id', $product->category->id)
                            ->where('id', '!=', $product->id)->paginate(6);


        return view('guest.detail', compact('product', 'related'));
    }  

    public function categorydetail($id)
    {   
        Category::where('slug', $id)->increment('counter', 1);
        $category = Category::where('slug', $id)->first();
        $products = $category->products()->paginate(6);

        return view('guest.detailcategory', compact('category', 'products'));
    }

    public function about()
    {
        return view('guest.about');
    }

    public function store()
    {   
        $q = Input::get('q', false);
        
        Search::insert(array('query' => $q));

        $products = Product::where('status', 'Y')->where('name', 'LIKE', '%'.$q.'%')->get();
        return view('guest.search', compact('products', 'q'));
    }

    public function what()
    {
        return view('layouts.what');
    }
}
