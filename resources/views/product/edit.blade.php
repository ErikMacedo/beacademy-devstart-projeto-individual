@extends('template.product')
@section('title', "Produto {$product->name}")
@section('body')

<h1>Editar Produto</h1>

<form class="contact-form row" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="form-field col-lg-6">
              <input id="name" name="name" class="input-text js-input" type="text" value="{{$product->name}}">
              <label class="label" for="name">Nome</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="weight" name="weight" class="input-text js-input" type="number" step="0.01" min="0" value="{{$product->weight}}">
              <label class="label" for="value">Peso</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="values" name="values" class="input-text js-input" type="number" step="0.01" min="0" value="{{$product->values}}">
              <label class="label" for="value">Preço</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="width" name="width" class="input-text js-input" type="number" step="0.01" min="0" value="{{$product->width}}">
              <label class="label" for="value">Largura</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="quantity" name="quantity" class="input-text js-input" type="number" value="{{$product->quantity}}">
              <label class="label" for="quantity">Quantidade</label>
            </div>

            <div class="form-field col-lg-6 ">
              <input id="height" name="height" class="input-text js-input" type="number" step="0.01" min="0" value="{{$product->height}}">
              <label class="label" for="value">Altura</label>
            </div>

            <div class="form-field col-lg-12">
              <input id="description" name="description" class="input-text js-input" type="text" value="{{$product->description}}">
              <label class="label" for="description">Descrição</label>
            </div>
            
            <div class="form-field col-lg-16 ">
              <input id="image_products" type="file" class="input-text js-input" name="image_products" />
              <label for="image_products" class="form-label">Selecione uma imagem</label>
            </div>
            <div class="form-field col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="custom-btn btn-11">Editar</button>
            </div>


@endsection