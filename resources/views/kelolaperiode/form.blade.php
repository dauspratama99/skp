
<div class="form-group">
        <div class="row">
            <div class="col-lg-3">
                <label for="start_date" class="col-form-label">Tanggal Mulai</label>
            </div>
            <div class="col-lg-9">
                {!! Form::date('start_date', null, ['class' => 'form-control', 'placeholder'=>'start_date']) !!}
            </div>
        </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="finish_date" class="col-form-label">Tanggal Selesai</label>
        </div>
        <div class="col-lg-9">
            {!! Form::date('finish_date', null, ['class' => 'form-control', 'placeholder'=>'finish_date']) !!}
        </div>
    </div>
</div>