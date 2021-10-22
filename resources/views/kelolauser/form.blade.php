<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="nip" class="col-form-label">NIP</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('nip', null, ['class' => 'form-control', 'placeholder'=>'nip']) !!}
        </div>
    </div>
</div>
<div class="form-group">
        <div class="row">
            <div class="col-lg-3">
                <label for="name" class="col-form-label">Name</label>
            </div>
            <div class="col-lg-9">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'name']) !!}
            </div>
        </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="unit_id" class="col-form-label">Unit</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('unit_id', $units,null, ['class' => 'form-control', 'placeholder'=>'Pilihan']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="position_id" class="col-form-label">Jabatan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('position_id', $jabatans,null, ['class' => 'form-control', 'placeholder'=>'Pilihan']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="rank_id" class="col-form-label">Pangkat</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('rank_id', $pangkats,null, ['class' => 'form-control', 'placeholder'=>'Pilihan']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-lg-9">
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'email']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="password" class="col-form-label">Password</label>
        </div>
        <div class="col-lg-9">
            {!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'password']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="role_id" class="col-form-label">Role Id</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('role_id', $roles,null, ['class' => 'form-control', 'placeholder'=>'Pilihan']) !!}
        </div>
    </div>
</div>
