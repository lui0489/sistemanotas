<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('editar Estudiante') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:x-6 lg:x-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('estudiantes.update',$estudiante)}}" method="post">
                    @method('PUT')
                    @include('estudiantes.formulario')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>