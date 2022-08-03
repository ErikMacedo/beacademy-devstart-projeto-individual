@extends('template.product')
@section('title', 'Listagem de Produtos')
@section('body')


<div class="container">
  <h1>Listagem de Produtos</h1>
  <a href="{{ route('product.create')}}" class="btn btn-success">Novo</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Peso</th>
        <th scope="col">Largura</th>
        <th scope="col">Altura</th>
        <th scope="col">Data de cadastro</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        <th scope="row">{{ $product->id }}</th>
        <td><img width="100px" height="100px" src="#"
        class="rounded mx-auto d-block"> </td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->quantity }}</td>
        <td>{{ $product->weight }}</td>
        <td>{{ $product->width }}</td>
        <td>{{ $product->height }}</td>
        <td>{{ date('d/m/Y - H:i', strtotime($product->created_at)) }}</td>
        <td><a href="{{ route('product.show', $product->id)}}" class="btn btn-info text-white">Visualizar</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

@endsection