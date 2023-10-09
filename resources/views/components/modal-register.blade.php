<div id="modalRegister" class="w-full h-full absolute top-0 left-0 bg-neutral-900/30 justify-center items-center hidden">
    <x-spinner-loading />
    <div class="w-4/5 md:w-2/4 lg:w-1/4 p-4 bg-white rounded-md">
        <form method="POST" id="registerUser" class="w-full flex flex-col gap-4">
            @csrf
            <div class="w-full flex gap-2 mb-4 relative">
                <h1 class="w-full text-3xl font-bold text-neutral-700 text-center">CADASTRAR</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer" id="closeModal">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <div class="my-3 p-2 bg-red-500 hidden flex-col gap-4" id="messageErrors"></div>

            <div class="w-full flex flex-col gap-2">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="p-2 border border-neutral-600 rounded-sm outline-none" />
            </div>
            <div class="w-full flex flex-col gap-2">
                <label for="email">E-mail</label>
                <input type="text" name="emailRegister" id="emailRegister" class="p-2 border border-neutral-600 rounded-sm outline-none" />
            </div>
            <div class="w-full flex flex-col gap-2">
                <label for="password">Senha</label>
                <input type="password" name="passwordRegister" id="passwordRegister" class="p-2 border border-neutral-600 rounded-sm outline-none" />
            </div>
            <div class="w-full flex flex-col items-center gap-2">
                <button id="buttonRegisterSubmit" type="button" class="w-1/2 p-2 bg-green-500 text-white rounded transition-all hover:bg-green-700">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
