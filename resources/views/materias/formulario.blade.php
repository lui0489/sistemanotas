@csrf
<div class="block">
    <x-jet-label for="id" value="{{ __('ID') }}" />
    <x-jet-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id',$materia->id)" required autofocus />
    <x-jet-label for="nombremateria" value="{{__('Nombre Materia')}}" />
    <x-jet-input id="nombremateria" class="block mt-1 w-full" type="text" name="nombremateria" :value="old('nombremateria',$materia->nombremateria)" required autofocus />
    <x-jet-label for="version" value="{{__('Version')}}" />
    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version',$materia->version)" required autofocus />

    <div class="felx justify-center">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('materias.create') }}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>
</div>