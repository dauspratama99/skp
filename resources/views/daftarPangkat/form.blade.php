
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
            <label for="group" class="col-form-label">Golongan</label>
        </div>
        <div class="col-lg-9">
            {!! Form::text('group', null, ['class' => 'form-control', 'placeholder'=>'Golongan']) !!}
        </div>
    </div>
</div>