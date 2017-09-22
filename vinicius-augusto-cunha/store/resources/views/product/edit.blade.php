@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
        <input type="hidden" name="_method" value="PATCH">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit product
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" value="{{ $product->nome }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">SKU</label>
                    <div class="col-sm-10">
                        <input type="text" name="sku" class="form-control"  value="{{ $product->sku }}" required>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea name="descricao" cols="30"  class="form-control" rows="10" required>{{ $product->descricao }}</textarea>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" name="preco" class="form-control" value="{{ $product->preco }}" required>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-info btn-addon"><i class="glyphicon glyphicon-ok"></i>Update</button>
                <a href="{{ route('product.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection