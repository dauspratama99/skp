@extends('layouts.app')

@section('content')
<title>Form Output</title>
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 align="middle" class="card-title">Output</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form action="{{ isset($output) ? route('output.update', $output->id) : route('output.store') }}" method="POST">
            @csrf
            @if(isset($output))
            @isset($output)
            @method('put')
            @endif
            @endif
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror" value="{{ old('name') ?? $output->name ?? ''}}" name="name" placeholder="Type Here">
                    @error('name')
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
