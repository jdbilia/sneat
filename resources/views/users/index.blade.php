@extends('layouts/contentNavbarLayout')

@section('title', 'Tabela de Usuários')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Tabela /</span> CRUD de Usuários
</h4>
<div class="row">
  <div class="col-12 text-left">
    <a href="{{ route('users.create') }}" class="btn btn-info">Cadastrar Usuário</a>
  </div>
</div>
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Usuários</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NOME</th>
          <th>EMAIL</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <form action="{{ route('users.destroy', $user->id) }}" method="post">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                  @csrf
                  @method('delete')
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
