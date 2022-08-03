@extends('template.product')
@section('title', "Produto {$product->name}")
@section('body')
<div class="row">
    <div class="col-md-9 mt-5">
      <div class="container">
        <div class="d-flex justify-content-center container mt-5">
          <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
            <div class="about-product text-center mt-2"><img width="300px"
                src="#" class="border border-info rounded">
              <div>
                <h4>{{$product->name}}</h4>
              </div>
            </div>
            <div class="stats mt-2">
              <div class="d-flex justify-content-between p-price">
                <span>Preço:</span><span>{{$product->values}}</span>
              </div>
              <div class="d-flex justify-content-between p-price">
                <span>Quantidade:</span><span>{{$product->quantity}}</span>
              </div>
              <div class="d-flex justify-content-between p-price">
                <span>Peso:</span><span>{{$product->weight}}</span>
              </div>
              <div class="d-flex justify-content-between p-price">
                <span>Largura:</span><span>{{$product->width}}</span>
              </div>
              <div class="d-flex justify-content-between p-price">
                <span>Altura:</span><span>{{$product->height}}</span>
              </div>
              <div class="d-flex justify-content-between p-price">
                <span>Descrição:</span><span>{{$product->description}}</span>
              </div>
            </div>
            <form action="{{ route('product.destroy', $product->id)}}" method="POST" class="mt-5">
              @method('DELETE')
              @csrf
              <button type='submit' class="btn btn-secondary btn-lg btn-sm mt-5" role="button" aria-pressed="true"
                style="width:100%;">Deletar</button>
            </form><br>
            <a class="btn btn-secondary btn-lg btn-sm active" role="button" aria-pressed="true"
              href="{{ route('product.edit', $product->id)}}">Editar</a><br />
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection