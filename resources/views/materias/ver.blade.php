<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Materia') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:x-6 lg:x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="id" value="{{ __('ID') }}" />
                    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id', $materia->id)" readonly />
                    <x-jet-label for="nombremateria" value="{{ __('Nombre Materia') }}" />
                    <x-jet-input id="nombremateria" class="block mt-1 w-full" type="text" name="nombremateria" :value="old('nombremateria', $materia->nombremateria)" readonly />
                    <x-jet-label for="version" value="{{ __('Version') }}" />
                    <x-jet-input id="version" class="block mt-1 w-full" type="number" name="version" :value="old('version', $materia->version)" readonly />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>