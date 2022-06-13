<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('editar  Materia') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:x-6 lg:x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('materias.update',$materia)}}" method="post">
                    @method('PUT')
                    @include('materias.formulario')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>