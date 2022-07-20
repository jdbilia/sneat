@extends('layouts/contentNavbarLayout')

@section('title', 'Tabela de Produtos')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabela /</span> CRUD de Produtos
</h4>
<div class="row">
  <div class="col-12 text-left">
    <a href="{{ route('products.create') }}" class="btn btn-info">Criar Produto</a>
  </div>
</div>
<div class="row">
  {{-- <div>
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit" class="btn btn-warning">Logout</button>
    </form>
  </div> --}}
</div>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Produtos</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>SLUG</th>
          <th>DESCRIÇÃO</th>
          <th>PREÇO</th>
          <th>AÇÕES</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
              <form action="{{ route('products.destroy', $product->id) }}" method="post">
                  <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Apagar</button>
              </form>
          </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->

@endsection
