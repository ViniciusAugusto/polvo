@extends('layout.master')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('order.store') }}">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create new Order
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Data</label>
                    <div class="col-sm-10">
                        <input type="date" name="data" class="form-control" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Produto</label>
                    <div class="col-sm-10">
                        <input type="text" name="produto" class="form-control" value="" required>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Total</label>
                    <div class="col-sm-10">
                        <input type="text" name="total" class="form-control" value="" required>
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-ok"></i>Create</button>
                <a href="{{ route('order.index') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancel</a>
            </div>
        </div>
    </form>
@endsection