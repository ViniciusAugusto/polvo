@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('product.store') }}">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create new product
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">SKU</label>
                    <div class="col-sm-10">
                        <input type="text" name="sku" class="form-control" value="" required>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea name="descricao" cols="30"  class="form-control" rows="10" required></textarea>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Preço</label>
                    <div class="col-sm-10">
                        <input type="text" name="preco" class="form-control" value="" required>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-ok"></i>Create</button>
                <a href="{{ route('product.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection