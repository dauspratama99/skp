@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{--
                            ubah route
                            bagian $Units, bagian route, dan bagian Units->unit_id
                        --}}
                        {{ Form::model($positions, array('method' => 'PATCH', 'url' => route('daftarjabatan.update', $Position->id), 'files' => true)) }}
                            @include('daftarjabatan.form')
                            <div>
                                <button type="submit" class="btn btn-primary"><span class="cil-save btn-icon mr-2"></span>Simpan</button>
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection