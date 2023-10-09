@extends('layout')
@section('title', 'Criar Usuário')
@section('content')
<x-spinner-loading />
<h1 class="font-bold text-2xl mb-4">Cadastro de Usuários</h1>
<div class="w-2/12 my-4 p-2 bg-red-500 hidden flex-col gap-4" id="messageErrors"></div>
<form class="w-2/12 flex flex-col" id="registerUser">
    @csrf
    <div class="mb-6 flex flex-col">
        <label for="name" class="mb-2 text-sm font-medium text-gray-900 ">Nome</label>
        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
      </div>
    <div class="mb-6 flex-flex-col">
      <label for="email" class="mb-2 text-sm font-medium text-gray-900 ">E-mail</label>
      <input type="email" name="emailRegister" id="emailRegister" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
    </div>
    <div class="mb-6 flex-flex-col">
      <label for="password" class="mb-2 text-sm font-medium text-gray-900 ">Senha</label>
      <input type="password" name="passwordRegister" id="passwordRegister" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="w-full flex justify-between gap-2">
        <button type="submit" id="register" class="w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm sm:w-auto px-5 py-2.5 text-center">Cadastrar</button>
        <a href="{{ route('users.index') }}" class="w-1/2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-md text-sm sm:w-auto px-5 py-2.5 text-center">Cancelar</a>
    </div>
</form>
@vite('resources/js/users.js')
@endsection



