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
                                <a href="{{route('target.create')}}" class="btn btn-primary">Tambah Data
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
                                    <th class="text-center">Aktifitas</th>
                                    <th class="text-center">Angka</th>
                                    <th class="text-center">AK</th>
                                    <th class="text-center">Kuantitas</th>
                                    <th class="text-center">Output ID</th>
                                    <th class="text-center">Mutu</th>
                                    <th class="text-center">Waktu</th>
                                    <th class="text-center">Biaya</th>
                                    <th class="text-center">NIP</th>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Tipe</th>
                                    <th class="text-center">Parent ID</th>
                                    <th class="text-center">Status</th>

                                    <th class="text-center">Aksi</th>
                                </tr>
                                {{-- rubah selesai --}}
                            </thead>
                            <tbody>
                                @foreach ($user as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $data->activities }}</td>
                                    <td class="text-center">{{ $data->credit_number }}</td>
                                    <td class="text-center">{{ $data->ak }}</td>
                                    <td class="text-center">{{ $data->quantity }}</td>
                                    <td class="text-center">{{ $data->output_id }}</td>
                                    <td class="text-center">{{ $data->mutu }}</td>
                                    <td class="text-center">{{ $data->time }}</td>
                                    <td class="text-center">{{ $data->cost }}</td>
                                    <td class="text-center">{{ $data->nip_rated }}</td>
                                    <td class="text-center">{!!\Carbon\Carbon::parse($data->tgl_mulai)->isoFormat('D MMMM Y') .' <br> s/d <br>'. \Carbon\Carbon::parse($data->tgl_selesai)->isoFormat('D MMMM Y')!!}</td>
                                    <td class="text-center">{{ $data->type }}</td>
                                    <td class="text-center">{{ $data->Parent_id }}</td>
                                    <td class="text-center">{{ $data->status }}</td>
                                    
                                    <td class="text-center">
                                        <a href="{{ route('target.edit',$data->id) }}" class="btn btn-warning" id="editButton" data-target="#editPegawai">
                                            <i class="cil-pencil"></i>
                                        </a>
                                        <form action="{{ route('target.destroy', $data->id) }}" method="post" onclick="return confirm('Anda yakin menghapus data ?')" class="d-inline">
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


<!--  -->

@endsection