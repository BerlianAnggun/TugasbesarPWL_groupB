<x-app-layout>
    <x-slot name="hearder">
        <h2 class="font-semibold text-xl text gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cabang')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mas-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!--CONTENT HERE-->

                    <x-table>
                        <x-slot name="hearder">
                            <tr>
                                <th>#</th>
                                <th>cabang</th>
                                <th>id_cabang</th>
                                <th>nama_cabang</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>pegawai</th>
                            </tr>
                        </x-slot>
                        @php $num=1;
                        @endphp

                        @foreach ($cabangs as $cabang )
                        <tr>
                            <td>{{ $num++ }} </td>
                            <td>{{ $cabang->id_cabang }} </td>
                            <td>{{ $cabang->nama_cabang}} </td>
                            <td>{{ $cabang->alamat }} </td>
                            <td>{{ $cabang->telepon }} </td> 
                            <td>{{ $cabang->pegawai }} </td>
                            <td>
                                <img src="{{ asset('storage/cabang_alamat/'.$cabang->alamat) }}" width="100px"/>
                            </td>
                            <td>{{ $cabang->quantity }}</td>
                            <td>{{ $cabang->cabangshelf->alamat }}-{{ $cabang->cabangshelf->name }}</td>
                        </tr>    
                        @endforeach
                    </x-table>

                        
                </div>
            </div>
        </div>
    </div>
</x-app-layout>