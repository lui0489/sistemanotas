<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Estudiante') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:x-6 lg:x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="documento" value="{{ __('Documento') }}" />
                    <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento', $estudiante->documento)" readonly />
                    <x-jet-label for="namee" value="{{ __('Nombre') }}" />
                    <x-jet-input id="namee" class="block mt-1 w-full" type="text" name="namee" :value="old('namee', $estudiante->nombre)" readonly />
                    <x-jet-label for="edad" value="{{ __('Edad') }}" />
                    <x-jet-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad', $estudiante->edad)" readonly />
                    <x-jet-label for="grado" value="{{ __('Grado') }}" />
                    <x-jet-input id="grado" class="block mt-1 w-full" type="text" name="grado" :value="old('grado', $estudiante->grado)" readonly />
                </div>
            </div>
        </div>    
    </div>
</x-app-layout> 