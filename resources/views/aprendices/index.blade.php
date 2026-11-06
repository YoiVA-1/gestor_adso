@extends('layouts.app')

@section('title', 'aprendices')


@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Cabecera de la sección -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
            <h1 class="text-2xl font-bold text-gray-800">Listado de Aprendices</h1>
            <div class="toolbar">
                <a href="{{ route('aprendices.create') }}"
                    class="bg-red-600 hover:bg-indigo-700 text-white font-medium px-4 py-2 rounded-lg transition shadow-sm">
                    + Nuevo aprendiz
                </a>

                <form class="search-form" action="{{ route('aprendices.index') }}" method="GET">
                    <input type="text" name="q" value="{{ $q }}" placeholder="Buscar por nombre o documento">
                    <button type="submit">Buscar</button>

                    @if ($q !== '')
                        <a href="{{ route('aprendices.index') }}">
                            Limpiar
                        </a>
                    @endif
                </form>
            </div>
        </div>

        <!-- Alerta de sesión -->
        @if (session('ok'))
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm" role="alert">
                <p>{{ session('ok') }}</p>
            </div>
        @endif

        <!-- Contenedor de la tabla -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-red-950">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">ID
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Documento</th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Correo
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-semibold text-white uppercase tracking-wider">Ficha
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($aprendices as $aprendiz)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-red-700">{{ $aprendiz->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $aprendiz->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $aprendiz->documento }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $aprendiz->correo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $aprendiz->ficha_id ?? 'Sin ficha' }}
                                    </span>
                                </td>
                                <td class="actions">
                                    <a href="{{ route('aprendices.edit', $aprendiz) }}">Editar</a>

                                    <form action="{{ route('aprendices.destroy', $aprendiz) }}" method="POST"
                                        onsubmit="return confirm('¿Eliminar este aprendiz?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="danger-button">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                                    No hay aprendices registrados.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Paginación -->
            <div class="pagination bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{ $aprendices->links() }}
            </div>
        </div>

    </div>
@endsection