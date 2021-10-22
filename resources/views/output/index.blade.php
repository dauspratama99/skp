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
                                <a href="{{route('output.create')}}" class="btn btn-primary">Tambah Data
                                </a>
                                {{-- rubah href seleai --}}
                            </div>
                        </div>
                    </h5>
                    <div class="card-body col-lg-12">
                        <table class="table  table-striped ">
                            <thead>
                                {{-- rubah mulai --}}
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($output as $no=>$output )
                                <tr>
                                    <td class="text-center">{{ $no + 1 }}</td>
                                    <td class="text-center">{{ $output->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('output.edit',$output->id) }}" class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form action="{{ route('output.destroy', $output->id) }}" method="POST" onclick="return confirm('Anda yakin menghapus data ?')" class="d-inline">
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
