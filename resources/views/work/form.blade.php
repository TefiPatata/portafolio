
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('position') }}</label>
    <div>
        {{ Form::text('position', $work->position, ['class' => 'form-control' .
        ($errors->has('position') ? ' is-invalid' : ''), 'placeholder' => 'Position']) }}
        {!! $errors->first('position', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>position</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('modality') }}</label>
    <div>
        {{ Form::text('modality', $work->modality, ['class' => 'form-control' .
        ($errors->has('modality') ? ' is-invalid' : ''), 'placeholder' => 'Modality']) }}
        {!! $errors->first('modality', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>modality</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('time-contract') }}</label>
    <div>
        {{ Form::text('time-contract', $work->time_contract, ['class' => 'form-control' .
        ($errors->has('time-contract') ? ' is-invalid' : ''), 'placeholder' => 'Time-Contract']) }}
        {!! $errors->first('time-contract', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>time-contract</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('workplace') }}</label>
    <div>
        {{ Form::text('workplace', $work->workplace, ['class' => 'form-control' .
        ($errors->has('workplace') ? ' is-invalid' : ''), 'placeholder' => 'Workplace']) }}
        {!! $errors->first('workplace', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>workplace</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $work->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('skills_id') }}</label>
    <div>
        {{ Form::text('skills_id', $work->skills_id, ['class' => 'form-control' .
        ($errors->has('skills_id') ? ' is-invalid' : ''), 'placeholder' => 'Skills Id']) }}
        {!! $errors->first('skills_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">work <b>skills_id</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
