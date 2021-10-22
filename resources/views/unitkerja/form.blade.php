
{{-- form copy akhir --}}
<div class="form-group">
    <div class="row">
        <div class="col-lg-3">
            <label for="parents_id" class="col-form-label">Parent_id</label>
        </div>
        <div class="col-lg-9">
            {!! Form::select('parent_id', $units,null, ['class' => 'form-control', 'placeholder'=>'Pilihan']) !!}
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

