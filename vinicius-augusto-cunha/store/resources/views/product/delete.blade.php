@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
        <input type="hidden" name="_method" value="DELETE">
        <div class="panel panel-default">
            <div class="panel-heading">
                Delete product
            </div>
            <div class="panel-body">
                <p>Are you sure to delete product, named <del>{{ $product->nome }}</del>?</p>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-ok"></i>Delete</button>
                <a href="{{ route('product.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection