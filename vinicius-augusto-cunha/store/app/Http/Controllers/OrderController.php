<?php namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class OrderController extends Controller {

    public function __construct(Order $order) {
        $this->order = $order;
    }

    public function index() {
        $order = $this->order->query()->get();
        return view('order.index', ['orders' => $order]);
    }

    public function create() {
      return view('order.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'data' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('order.create')->withErrors($validator->errors());
        }
        $order = new $this->order;
        $order->data = $request->input('data');
        $order->total = $request->input('total');
        $order->produto = $request->input('produto');
        $order->save();
        return redirect()->route('order.index');
    }

    public function update(Request $request, $id) {
      $validator = Validator::make($request->all(), [
          'data' => 'required',
      ]);
      if ($validator->fails()) {
          return redirect()->route('product.index')->withErrors($validator)->withInput();
      }
      $order = new $this->order;
      $order->data = $request->input('data');
      $order->total = $request->input('total');
      $order->produto = $request->input('produto');
      $order->save();
      return redirect()->route('order.index');
  }

    public function delete($id) {
        $order = $this->order->query()->findOrFail($id);
        return view('order.delete', ['order' => $order]);
    }

    public function destroy($id) {
        $this->order->query()->findOrFail($id)->delete();
        return redirect()->route('order.index');
    }

}