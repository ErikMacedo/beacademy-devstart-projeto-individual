<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Storage;


class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }
    public function index()
    {
        $products = Product::all();


        return view('product.index', compact('products'));
    }
    
    public function show($id)
    {
        if (!$product = product::find($id))
            return redirect()->route('product.index');


        return view('product.show', compact('product'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(StoreUpdateForm $request)
    {
  
      $data = $request->all();
  

  
      $this->model->create($data);
  
      return redirect()->route('product.index')->with('success', 'Produto cadastrado com sucesso!');
    }
    
    public function destroy($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('product.index');
        }

        $product->delete();
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('product.index');
        }
        return view('product.edit', compact('product'));
    }

    public function update(StoreUpdateForm $request, $id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('product.index');
        }
        $data = $request->all();
        //if ($request->hasFile('image')) {
       //     $data['image'] = $request->file('image')->store('itens', 'public');
        // }
        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Produto atualizado com sucesso!');
    }

}
