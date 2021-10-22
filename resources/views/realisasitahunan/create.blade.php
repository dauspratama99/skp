@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        {{-- ubah route --}}
                        {{Form::open(array('url' => route('realisasitahunan.store') )) }}
                        @include('realisasitahunan.form')
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
