<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\season;
use App\Models\Product_season;
class ProductController extends Controller
{
    public function index()
    {
        $authors = Product::Paginate(6);

        return view('products', compact('authors'));
    }

    public function update(Request $request,$id)
    {
        
        $up = Product::find($id);
        return view('update', compact('up'));
    }

    public function find()
    {
        return view('search', ['input' => '']);
    }
    public function search(Request $request)
    {

        $item = Product::where('name', 'LIKE', "%{$request->input}%")
            ->orwhere('price', 'LIKE', "%{$request->input}%")
            ->orwhere('image', 'LIKE', "%{$request->input}%")->first();

        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('search', $param,);
    }

    public function store(ProductRequest $request)
    {
        $products =
        $request->only(['image', 'name', 'price', 'description']);
        
        $product = Product::find($request->id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public'); $products['image'] = $imagePath; }
        if ($product) {Product::find($request->id)->update($products);}
        return redirect('products');
    }

    public function add(Request $request)
    {      $seasons = $request->
        only(['season']);
        Season::create($request->$seasons);       
        return redirect('products');
    }
    public function destroy(Request $request)
    {
        $delete = Product::find($request->id);
        if($delete){
            $delete->delete();
        }
        return redirect('products');
    }


    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
        $products = [
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'description' => $request->description,
        ];
        $seasons = [
            'season' => $request->season,            
        ];
        product::create($products);
        Season::create($seasons);
        return redirect('products');
    }
}
//$desc = Author::orderBy('price', 'desc')->get();
//$asc = Author::orderBy('price', 'asc')->get();
