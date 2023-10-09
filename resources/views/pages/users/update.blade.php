@extends('layout')

@section('title', 'Atualizar Usuário')
@section('content')

<h1 class="font-bold text-2xl mb-4">Edição de Usuários</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="w-2/12 flex flex-col" method="POST" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="mb-6 flex flex-col">
        <label for="name" class="mb-2 text-sm font-medium text-gray-900 ">Nome</label>
        <input type="text" value="{{ $user->name }}" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
      </div>
    <div class="mb-6 flex-flex-col">
      <label for="email" class="mb-2 text-sm font-medium text-gray-900 ">E-mail</label>
      <input type="email" name="email" value="{{ $user->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
    </div>
    <div class="mb-6 flex-flex-col">
      <label for="password" class="mb-2 text-sm font-medium text-gray-900 ">Senha</label>
      <input type="password" name="password" {{ $user->password }} class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="w-full flex justify-between gap-2">
        <button type="submit" class="w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm sm:w-auto px-5 py-2.5 text-center">Editar</button>
        <a href="{{ route('users.index') }}" class="w-1/2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-md text-sm sm:w-auto px-5 py-2.5 text-center">Cancelar</a>
    </div>
</form>
@endsection
