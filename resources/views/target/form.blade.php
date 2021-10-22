@extends('layouts.app')

@section('content')
<title>Form skps</title>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 align="middle" class="card-title">SKPS</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{ isset($target) ? route('target.update', $target->id) : route('target.store') }}" method="POST">
            @csrf
            @if(isset($target))
            @isset($target)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="activities">Aktifitas</label>
                    <input type="text" class="form-control @error('activities') {{ 'is-invalid' }} @enderror" value="{{ old('activities') ?? $target->activities ?? ''}}" name="activities" placeholder="Type Here">
                    @error('activities')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="credit_number">Angka Kredit</label>
                    <input type="text" class="form-control @error('credit_number') {{ 'is-invalid' }} @enderror" value="{{ old('credit_number') ?? $target->credit_number ?? ''}}" name="credit_number" placeholder="Type Here">
                    @error('credit_number')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="ak">AK</label>
                    <input type="text" class="form-control @error('ak') {{ 'is-invalid' }} @enderror" value="{{ old('ak') ?? $target->ak ?? ''}}" name="ak" placeholder="Type Here">
                    @error('ak')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Kuantitas</label>
                    <input type="text" class="form-control @error('quantity') {{ 'is-invalid' }} @enderror" value="{{ old('quantity') ?? $target->quantity ?? ''}}" name="quantity" placeholder="Type Here">
                    @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Output ID</label>
                        <select name="output_id" id="output_id" class="form-control @error('output_id') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($output as $no => $output)
                            <option value="{{ $output->id }}">
                                {{ $output->id}} / {{$output->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($target))
                        <script>
                            document.getElementById('output_id').value =
                                '<?php echo $target->output_id ?>'
                        </script>
                        @endif
                        @error('output_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="mutu">Mutu</label>
                    <input type="text" class="form-control @error('mutu') {{ 'is-invalid' }} @enderror" value="{{ old('mutu') ?? $target->mutu ?? ''}}" name="mutu" placeholder="Type Here">
                    @error('mutu')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="time">Waktu</label>
                    <input type="text" class="form-control @error('time') {{ 'is-invalid' }} @enderror" value="{{ old('time') ?? $target->time ?? ''}}" name="time" placeholder="Type Here">
                    @error('time')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cost">Biaya</label>
                    <input type="text" class="form-control @error('cost') {{ 'is-invalid' }} @enderror" value="{{ old('cost') ?? $target->cost ?? ''}}" name="cost" placeholder="Type Here">
                    @error('cost')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>NIP Dinilai</label>
                        <select name="nip_rated" id="nip_rated" class="form-control @error('nip_rated') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($users as $no => $users)
                            <option value="{{ $users->nip }}">
                                {{ $users->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($target))
                        <script>
                            document.getElementById('nip_rated').value =
                                '<?php echo $target->nip_rated ?>'
                        </script>
                        @endif
                        @error('nip_rated')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Periode</label>
                        <select name="periode_id" id="periode_id" class="form-control @error('periode_id') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($periode as $no => $periode)
                            <option value="{{ $periode->id }}">
                                {!!\Carbon\Carbon::parse($periode->start_datte)->isoFormat('D MMMM Y') .' <br> s/d <br>'. \Carbon\Carbon::parse($periode->finish_date)->isoFormat('D MMMM Y')!!}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($target))
                        <script>
                            document.getElementById('periode_id').value =
                                '<?php echo $target->periode_id ?>'
                        </script>
                        @endif
                        @error('periode_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="type">Tipe</label>
                    <select name="type" class="form-control" id="type">
                        <option value="" selected disabled>-- Pilih --</option>
                        <option value="Kreativitas">Kreativitas</option>
                        <option value="Tambahan">Tambahan</option>
                        <option value="Tugas Jabatan">Tugas Jabatan</option>
                    </select>

                    @if(isset($target))
                    <script>
                        document.getElementById('type').value='{{$target->type}}'
                    </script>
                    @endif
                    

                    <!-- <input type="text" class="form-control @error('type') {{ 'is-invalid' }} @enderror" value="{{ old('type') ?? $target->type ?? ''}}" name="type" placeholder="Type Here">
                    @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror -->
                </div>

                <div class="form-group">
                    <label for="">Parent ID</label>
                    <select class="form-control" name="parent_id" id="parent_id">
                        <option value="" selected disabled>-- Pilih --</option>
                        @foreach($data_posisi as $data)
                        <option value="{{$data->parent_id}}">{{$data->parent_id}} - {{$data->name}}</option>
                        @endforeach
                    </select>
                    @if(isset($target))
                    <script>
                        document.getElementById('parent_id').value = '{{ $data->parent_id }}'
                    </script>
                    @endif
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