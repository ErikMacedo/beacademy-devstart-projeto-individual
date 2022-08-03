@extends('template.product')
@section('title', 'Novo Produto')
@section('body')

<h1>Novo Produto</h1>

<form class="contact-form row" action="{{route('product.store')}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-field col-lg-6">
              <input id="name" name="name" class="input-text js-input" type="text" required>
              <label class="label" for="name">Nome</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="weight" name="weight" class="input-text js-input" type="number" step="0.01" min="0" required>
              <label class="label" for="value">Peso</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="values" name="values" class="input-text js-input" type="number" step="0.01" min="0" required>
              <label class="label" for="value">Preço</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="width" name="width" class="input-text js-input" type="number" step="0.01" min="0" required>
              <label class="label" for="value">Largura</label>
            </div>
            <div class="form-field col-lg-6 ">
              <input id="quantity" name="quantity" class="input-text js-input" type="number" required>
              <label class="label" for="quantity">Quantidade</label>
            </div>

            <div class="form-field col-lg-6 ">
              <input id="height" name="height" class="input-text js-input" type="number" step="0.01" min="0" required>
              <label class="label" for="value">Altura</label>
            </div>

            <div class="form-field col-lg-12">
              <input id="description" name="description" class="input-text js-input" type="text" required>
              <label class="label" for="description">Descrição</label>
            </div>
            
            <div class="form-field col-lg-16 ">
              <input id="image_products" type="file" class="input-text js-input" name="image_products" required />
              <label for="image_products" class="form-label">Selecione uma imagem</label>
            </div>
            <div class="form-field col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
              <button type="submit" class="custom-btn btn-11">Confirmar</button>
            </div>


@endsection