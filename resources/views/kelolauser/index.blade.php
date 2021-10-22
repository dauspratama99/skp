 @extends('layouts.app')

@section('content')
<div class="container-fluid">
    
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5>
                        <div class="card-header">
                            <div class="d-flex">
                                {{-- rubah href mulai --}}
                                <a href="{{ route('kelolauser.create') }}" class="btn btn-primary">Tambah Data Pegawai</a>
                                {{-- rubah href seleai --}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body">
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                                {{-- rubah mulai --}}
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Unit</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Pangkat</th>
                                    <th class="text-center">Email</th>
                                    {{-- <th class="text-center">Password</th> --}}
                                    <th class="text-center">Role Id</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($users as $data)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $data->nip }}</td>
                                        <td class="text-center">{{ $data->name }}</td>
                                        <td class="text-center">{{ $data->unit->name }}</td>
                                        <td class="text-center">{{ $data->position->name }}</td>
                                        <td class="text-center">{{ $data->rank->name }}</td>
                                        <td class="text-center">{{ $data->email}}</td>    
                                        {{-- <td class="text-center">{{ $data->password}}</td> --}}
                                        <td class="text-center">{{ $data->role->name }}</td>
                                        <td>
                                            <a href="{{ route('kelolauser.edit',$data->nip) }}"class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                                <i class="cil-pencil"></i>
                                            </a>
                                            <form
                                            action="{{ route('kelolauser.destroy', $data->nip) }}"
                                            method="post" onclick="return confirm('Anda yakin menghapus data ?')"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-youtube">
                                                <i class="cil-trash"></i>
                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection