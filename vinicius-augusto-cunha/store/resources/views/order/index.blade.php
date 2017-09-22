@extends('layout.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('order.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-plus"></i>Create Order</a>
        </div>
        <table class="table table-bordered has-action">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Produto's</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->data->format('d/m/Y')}}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->produto }}</td>
                        <td>
                            <a href="{{ route('order.delete', ['id' => $order->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection