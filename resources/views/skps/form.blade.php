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
        <form action="{{ isset($skps) ? route('skps.update', $skps->nip_rated) : route('skps.store') }}" method="POST">
            @csrf
            @if(isset($skps))
            @isset($skps)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <!-- <input type="hidden" name="id_pengguna" value="{{session('id_pengguna')}}"> -->
                @if($role_id == 3)
                <div class="row">
                  
                    <div class="form-group  col-md-12">
                        <label>Nama Dinilai</label>
                        <select name="nip_rated" id="nip_rated" class="form-control @error('nip_rated') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($users as $no => $users)
                            <option value="{{ $users->nip }}">
                                {{ $users->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('nip_rated').value =
                                '<?php echo $skps->nip_rated ?>'
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
                        @if(isset($skps))
                        <script>
                            document.getElementById('periode_id').value =
                                '<?php echo $skps->periode_id ?>'
                        </script>
                        @endif
                        @error('periode_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Unit Dinilai</label>
                        <select name="rated_unit_id" id="rated_unit_id" class="form-control @error('rated_unit_id') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($unit as $no => $unit)
                            <option value="{{ $unit->id }}" >
                                {{ $unit->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('rated_unit_id').value =
                                '<?php echo $skps->rated_unit_id ?>'
                        </script>
                        @endif
                        @error('rated_unit_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Posisi Dinilai</label>
                        <select name="rated_position_id" id="rated_position_id" class="form-control @error('rated_position_id') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($position as $no => $position)
                            <option value="{{ $position->id }}" >
                                {{ $position->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('rated_position_id').value =
                                '<?php echo $skps->rated_position_id ?>'
                        </script>
                        @endif
                        @error('rated_position_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Pangkat Golongan Dinilai</label>
                        <select name="rated_rankgroup_id" id="rated_rankgroup_id" class="form-control @error('rated_rankgroup_id') {{ 'is-invalid' }} @enderror">
                            <option value="">Select</option>
                            @foreach($rankgroup as $no => $rankgroup)
                            <option value="{{ $rankgroup->id }}" >
                                {{ $rankgroup->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('rated_rankgroup_id').value =
                                '<?php echo $skps->rated_rankgroup_id ?>'
                        </script>
                        @endif
                        @error('rated_rankgroup_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                   
                </div>
                @endif
                
                @if($role_id == 3)
                <div class="form-group">
                    <label for="commitment">Komitmen</label>
                    <input type="text" class="form-control @error('commitment') {{ 'is-invalid' }} @enderror" value="{{ old('commitment') ?? $skps->commitment ?? ''}}" name="commitment" placeholder="Type Here">
                    @error('commitment')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="discipline">Disiplin</label>
                    <input type="text" class="form-control @error('discipline') {{ 'is-invalid' }} @enderror" value="{{ old('discipline') ?? $skps->discipline ?? ''}}" name="discipline" placeholder="Type Here">
                    @error('discipline')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cooperation">Kerja Sama</label>
                    <input type="text" class="form-control @error('cooperation') {{ 'is-invalid' }} @enderror" value="{{ old('cooperation') ?? $skps->cooperation ?? ''}}" name="cooperation" placeholder="Type Here">
                    @error('cooperation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="leadership">Kepemimpinan</label>
                    <input type="text" class="form-control @error('leadership') {{ 'is-invalid' }} @enderror" value="{{ old('leadership') ?? $skps->leadership ?? ''}}" name="leadership" placeholder="Type Here">
                    @error('leadership')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="integrity">Integritas</label>
                    <input type="text" class="form-control @error('integrity') {{ 'is-invalid' }} @enderror" value="{{ old('integrity') ?? $skps->integrity ?? ''}}" name="integrity" placeholder="Type Here">
                    @error('integrity')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="service_oriented">Orientasi Pelayanan</label>
                    <input type="text" class="form-control @error('service_oriented') {{ 'is-invalid' }} @enderror" value="{{ old('service_oriented') ?? $skps->service_oriented ?? ''}}" name="service_oriented" placeholder="Type Here">
                    @error('service_oriented')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                @endif

                <div class="form-group">
                    <label for="objection_rated">Keberatan Dinilai</label>
                    <input type="text" class="form-control @error('objection_rated') {{ 'is-invalid' }} @enderror" value="{{ old('objection_rated') ?? $skps->objection_rated ?? ''}}" name="objection_rated" placeholder="Type Here">
                    @error('objection_rated')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if($role_id == 3)
                <div class="form-group">
                    <label for="response_evaluator">Keberatan Penilai</label>
                    <input type="text" class="form-control @error('response_evaluator') {{ 'is-invalid' }} @enderror" value="{{ old('response_evaluator') ?? $skps->response_evaluator ?? ''}}" name="response_evaluator" placeholder="Type Here">
                    @error('response_evaluator')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="superior_decision">Keputusan Atasan</label>
                    <input type="text" class="form-control @error('superior_decision') {{ 'is-invalid' }} @enderror" value="{{ old('superior_decision') ?? $skps->superior_decision ?? ''}}" name="superior_decision" placeholder="Type Here">
                    @error('superior_decision')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="recommendation">Rekomendasi</label>
                    <input type="text" class="form-control @error('recommendation') {{ 'is-invalid' }} @enderror" value="{{ old('recommendation') ?? $skps->recommendation ?? ''}}" name="recommendation" placeholder="Type Here">
                    @error('recommendation')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="start_date">Tanggal Selesai</label>
                    <input type="date" class="form-control @error('start_date') {{ 'is-invalid' }} @enderror" value="{{ old('start_date') ?? $skps->start_date ?? ''}}" name="start_date">
                    @error('start_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date_given_to_superiors">Tanggal Diberikan Keatasan</label>
                    <input type="date" class="form-control @error('date_given_to_superiors') {{ 'is-invalid' }} @enderror" value="{{ old('date_given_to_superiors') ?? $skps->date_given_to_superiors ?? ''}}" name="date_given_to_superiors">
                    @error('date_given_to_superiors')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @endif
               
                @if($role_id == 3)
                <div class="row">
              
                    <div class="form-group  col-md-12">
                        <label>Nama Penilai</label>
                        <select name="nip_evaluator" id="nip_evaluator" class="form-control @error('nip_evaluator') {{ 'is-invalid' }} @enderror">
                            @php
                            $test = DB::table('users')->get();
                            @endphp
                            <option value="">Select</option>
                            @foreach($test as $no => $usersevaluator)
                            <option value="{{ $usersevaluator->nip }}" >
                                {{ $usersevaluator->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('nip_evaluator').value =
                                '<?php echo $skps->nip_evaluator ?>'
                        </script>
                        @endif
                        @error('nip_evaluator')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Unit Penilai</label>
                        <select name="evaluator_unit_id" id="evaluator_unit_id" class="form-control @error('evaluator_unit_id') {{ 'is-invalid' }} @enderror">
                            @php
                            $units = DB::table('units')->get();
                            @endphp
                            <option value="">Select</option>
                            @foreach($units as $no => $unit)
                            <option value="{{ $unit->id }}" >
                                {{ $unit->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('evaluator_unit_id').value =
                                '<?php echo $skps->evaluator_unit_id ?>'
                        </script>
                        @endif
                        @error('evaluator_unit_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Posisi Penilai</label>
                        <select name="evaluator_position_id" id="evaluator_position_id" class="form-control @error('evaluator_position_id') {{ 'is-invalid' }} @enderror">
                            @php
                            $positions = DB::table('positions')->get();
                            @endphp
                            <option value="">Select</option>
                            @foreach($positions as $no => $position)
                            <option value="{{ $position->id }}" >
                                {{ $position->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('evaluator_position_id').value =
                                '<?php echo $skps->evaluator_position_id ?>'
                        </script>
                        @endif
                        @error('evaluator_position_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group  col-md-12">
                        <label>Pangkat Golongan Penilai</label>
                        <select name="evaluator_rankgroup_id" id="evaluator_rankgroup_id" class="form-control @error('evaluator_rankgroup_id') {{ 'is-invalid' }} @enderror">
                            @php
                            $rank_group = DB::table('rank_groups')->get();
                            @endphp
                            <option value="">Select</option>
                            @foreach($rank_group as $no => $rankgroup)
                            <option value="{{ $rankgroup->id }}" >
                                {{ $rankgroup->name}}
                            </option>
                            @endforeach
                        </select>
                        @if(isset($skps))
                        <script>
                            document.getElementById('evaluator_rankgroup_id').value =
                                '<?php echo $skps->evaluator_rankgroup_id ?>'
                        </script>
                        @endif
                        @error('evaluator_rankgroup_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                   
                </div>
                @endif

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="hidden" name="role" value="{{auth()->user()->role->name}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection