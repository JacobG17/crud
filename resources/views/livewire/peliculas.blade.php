<div class= "py-5" >
    <div class="max-w-6xl mx-auto sm:px-2 lg:px-10">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4" >
            
        <button onclick="crear()" class="sm:rounded-lg bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3" >Nuevo</button>
        @if ($modal)
            @include('livewire.agregar')           
        @endif   
            <table class="table-fixed" >
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th cla ss="w-20px" >Nombre</th>
                        <th class="w-30px">Reseña</th>
                        <th class="w-20px">Director</th>
                        <th class="w-20px">Genero</th>
                        <th class="w-20px">Fecha de estreno</th>
                        <th class= "w-40px">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach ($movies as $pelicula)
                    <tr>
                        <td class ="border px-1 py-1">{{$pelicula->nombre }}</td>
                        <td class ="border px-1 py-1">{{$pelicula->reseña }}</td>
                        <td class ="border px-1 py-1 text-center">{{$pelicula->director }}</td>
                        <td class ="border px-1 py-1 text-center">{{$pelicula->genero }}</td>
                        <td class ="border px-1 py-1 text-center">{{$pelicula->fecha_de_estreno }}</td>
                        <td class = "border text-center">
                            <button class="bg-blue-900 sm:rounded-lg p-1 hover:bg-blue-700">
                                <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                            </button>
                            <button class="bg-red-600 sm:rounded-lg p-1 hover:bg-red-500">
                                <i class="fa-solid fa-trash" style="color: #ffffff"></i>
                            </button>
                        </td>
                    </tr>   
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
