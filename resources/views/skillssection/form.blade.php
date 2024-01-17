
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('title') }}</label>
    <div>
        {{ Form::text('title', $skillssection->title, ['class' => 'form-control' .
        ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skillssection <b>title</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $skillssection->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skillssection <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('skills_id') }}</label>
    <div>
        {{ Form::text('skills_id', $skillssection->skills_id, ['class' => 'form-control' .
        ($errors->has('skills_id') ? ' is-invalid' : ''), 'placeholder' => 'Skills Id']) }}
        {!! $errors->first('skills_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skillssection <b>skills_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('education_id') }}</label>
    <div>
        {{ Form::text('education_id', $skillssection->education_id, ['class' => 'form-control' .
        ($errors->has('education_id') ? ' is-invalid' : ''), 'placeholder' => 'Education Id']) }}
        {!! $errors->first('education_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skillssection <b>education_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('certificate_id') }}</label>
    <div>
        {{ Form::text('certificate_id', $skillssection->certificate_id, ['class' => 'form-control' .
        ($errors->has('certificate_id') ? ' is-invalid' : ''), 'placeholder' => 'Certificate Id']) }}
        {!! $errors->first('certificate_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skillssection <b>certificate_id</b> instruction.</small>
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
