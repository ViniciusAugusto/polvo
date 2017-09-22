@extends('layout.master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="{{ route('product.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicon glyphicon-plus"></i>Create</a>
        </div>
        <table class="table table-bordered has-action">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $prod)
                    <tr>
                        <td>{{ $prod->sku }}</td>
                        <td>{{ $prod->nome }}</td>
                        <td>{{ $prod->descricao }}</td>
                        <td>{{ $prod->preco }}</td>
                        <td>
                            <a href="{{ route('product.edit', ['id' => $prod->id]) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ route('product.delete', ['id' => $prod->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection