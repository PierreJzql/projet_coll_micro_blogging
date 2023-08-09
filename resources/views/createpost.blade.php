<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création du post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-lime-400 ">
                    <h1> page de création du post </h1>

                    <form action="{{ route('sendpost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')

                        <ul>
                          <li>
                            <label for="titre">Titre&nbsp;:</label>
                            <input type="text" id="titre" name="titre" />
                          </li>
                          <li>
                            <label for="image">Image&nbsp;:</label>
                            <input type="file" id="image" name="image" />
                          </li>
                          <li>
                            <label for="contenu">Contenu&nbsp;:</label>
                            <textarea id="contenu" name="contenu"></textarea>
                          </li>
                          <input type="submit" value="Envoyer" class="border-solid border-2 border-indigo-600"/>
                        </ul>
                      </form>
                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
