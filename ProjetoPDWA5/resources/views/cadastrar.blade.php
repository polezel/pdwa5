<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar novo Utensílio de Cozinha') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!--token de formulario -->
                    <div>
                        <x-input-label for="nome" :value="__('Nome do utensílio (até 50 caracteres)')" />
                        <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" maxlength="50" required autofocus autocomplete="nome" />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="material" :value="__('Material do utensílio (até 50 caracteres)')" />
                        <x-text-input id="material" class="block mt-1 w-full" type="text" name="material" :value="old('material')" maxlength="50" required autocomplete="material" />
                        <x-input-error :messages="$errors->get('material')" class="mt-2" />
                    </div>


                    <div class="mt-4">
                        <x-input-label for="cor" :value="__('Cor')" />
                        <x-text-input id="cor" class="block mt-1 w-full" type="text" name="cor" :value="old('cor')" maxlength="50" required autocomplete="cor" />
                        <x-input-error :messages="$errors->get('cor')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="uso" :value="__('Uso do utensílio (até 50 caracteres)')" />
                        <x-text-input id="uso" class="block mt-1 w-full" type="text" name="uso" :value="old('uso')" maxlength="50" required autocomplete="uso" />
                        <x-input-error :messages="$errors->get('uso')" class="mt-2" />
                    </div>

                    
                    <div class="mt-4">
                        <x-input-label for="capacidade" :value="__('Capacidade do utensílio (em Litros)')" />
                        <x-text-input id="capacidade" class="block mt-1 w-full" type="number" step="0.01" name="capacidade" :value="old('capacidade')" required />
                        <x-input-error :messages="$errors->get('capacidade')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>