<?php namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ProductController extends Controller {

    public function __construct(Product $product) {
        $this->product = $product;
    }

    public function index() {
        $products = $this->product->query()->get();
        return view('product.index', ['products' => $products]);
    }

    public function create() {
        return view('product.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('product.create')->withErrors($validator->errors());
        }
        $product = new $this->product;
        $product->nome = $request->input('nome');
        $product->descricao = $request->input('descricao');
        $product->sku = $request->input('sku');
        $product->preco = $request->input('preco');
        $product->save();
        return redirect()->route('product.index');
    }

    public function edit($id) {
        $product = $this->product->query()->find($id);
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('product.index')->withErrors($validator)->withInput();
        }
        $product = $this->product->query()->find($id);
        $product->nome = $request->input('nome');
        $product->descricao = $request->input('descricao');
        $product->sku = $request->input('sku');
        $product->preco = $request->input('preco');
        $product->save();
        return redirect()->route('product.index');
    }

    public function delete($id) {
        $product = $this->product->query()->findOrFail($id);
        return view('product.delete', ['product' => $product]);
    }

    public function destroy($id) {
        $this->product->query()->findOrFail($id)->delete();
        return redirect()->route('product.index');
    }
}