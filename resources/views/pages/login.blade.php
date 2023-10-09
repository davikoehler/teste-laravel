<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Login</title>
  @vite('resources/css/app.css')
  @vite('resources/js/register.js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="w-screen h-screen">
    <main class="w-full h-full flex justify-center items-center bg-neutral-800">
        <form action="{{ route('auth') }}" method="POST"  class="w-4/5 md:w-2/4 lg:w-1/4 flex flex-col items-center gap-6 p-2">
            @csrf
            <h1 class="text-3xl font-semibold text-neutral-300">LOGIN</h1>
            @if(session('error'))
                <div class="w-full my-3 p-2 bg-red-500 flex justify-center items-center rounded  gap-4">
                    <p class="text-white font-semibold">{{ session('error') }}</p>
                </div>
            @endif
            <div class="w-full flex flex-col gap-2">
                <label for="email" class="text-neutral-300">E-mail</label>
                <input type="text" name="email" id="email" class="p-3 rounded-sm outline-none bg-neutral-600 text-neutral-300" placeholder="Digite o e-mail" value="{{ old('email') }}">
                @error('email') <x-alert :$message colorText="text-red-500" /> @enderror
            </div>
            <div class="w-full flex flex-col gap-2">
                <label for="password" class="text-neutral-300">Senha</label>
                <input type="password" name="password" id="password" class="p-3 rounded-sm outline-none bg-neutral-600 text-neutral-300" placeholder="Digite a sua senha">
                @error('password') <x-alert :$message colorText="text-red-500" /> @enderror
            </div>
            <div class="w-full flex justify-end">
                <button type="button" id="register" class="text-sm text-white hover:text-blue-500">Não possui conta? Cadastre-se</button>
            </div>
            <div class="w-full flex flex-col gap-2">
                <button class="p-2 bg-green-500 rounded-sm font-bold text-white transition-all hover:bg-green-700">Entrar</button>
            </div>
        </form>
    </main>

    <x-modal-register />
</body>
</html>
