<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            <a type="button" href="{{ route('productos.create') }}"  style="float: right;" class=" bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th class="border px-4 py-2">Nombre Producto</th>
                        <th class="border px-4 py-2">Descripcion</th>
                        <th class="border px-4 py-2">Precio</th>
                        <th class="border px-4 py-2">Estado</th>
                        <th class="border px-4 py-2">Publicacion</th>
                        <th class="border px-4 py-2">Acciones</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td style="display: none;">{{$producto->id}}</td>
                        <td>{{$producto->nombre_producto}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio}}</td>  
                        <td>{{$producto->estado}}</td>
                        <td>{{$producto->fecha_publicacion}}</td>  

                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                <!-- botón editar -->
                                <a href="" class="rounded bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4">Editar</a>

                                <!-- botón borrar -->
                                <form action="" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 py-2 px-4 rounded text-gray-200 font-semibold hover:bg-red-500 transition duration-200 each-in-out">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
                <div>
                    {!! $productos->links() !!}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
