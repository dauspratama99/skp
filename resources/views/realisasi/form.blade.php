@extends('layouts.app')

@section('content')
<title>Form Realisasi</title>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 align="middle" class="card-title">Realisasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{ isset($realiation) ? route('realiation.update', $realiation->id) : route('realiation.store') }}" method="POST">
            @csrf
            @if(isset($realiation))
            @isset($realiation)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>ID Target</label>
                        <select name="id" id="id" class="form-control @error('id') {{ 'is-invalid' }} @enderror">
                            <option disabled selected value="">Select</option>
                            @foreach($target as $no => $target)
                            <option value="{{ $target->id }}">
                                {{ 'ID : '. $target->id .' - Aktifitas : '. $target->activities}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($realiation))
                        <script>
                            document.getElementById('id').value =
                                '<?php echo $realiation->id ?>'
                        </script>
                        @endif
                        @error('id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity">Kuantitas</label>
                    <input type="text" class="form-control @error('kuantitas') {{ 'is-invalid' }} @enderror" value="{{ old('kuantitas') ?? $realiation->kuantitas ?? ''}}" name="kuantitas" placeholder="100">
                    @error('kuantitas')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="credit_number">Kredit</label>
                    <input type="text" class="form-control @error('kredit') {{ 'is-invalid' }} @enderror" value="{{ old('kredit') ?? $realiation->kredit ?? ''}}" name="kredit" placeholder="100">
                    @error('kredit')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="credit_number">Mutu</label>
                    <input type="text" class="form-control @error('mutu') {{ 'is-invalid' }} @enderror" value="{{ old('mutu') ?? $realiation->mutu ?? ''}}" name="mutu" placeholder="100">
                    @error('mutu')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="credit_number">Biaya</label>
                    <input type="text" class="form-control @error('biaya') {{ 'is-invalid' }} @enderror" value="{{ old('biaya') ?? $realiation->biaya ?? ''}}" name="biaya" placeholder="Rp. -">
                    @error('biaya')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="credit_number">Waktu</label>
                    <input type="text" class="form-control @error('waktu') {{ 'is-invalid' }} @enderror" value="{{ old('waktu') ?? $realiation->waktu ?? ''}}" name="waktu" placeholder="5 Bulan">
                    @error('waktu')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection
