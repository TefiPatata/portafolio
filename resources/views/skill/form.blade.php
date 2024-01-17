
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('skill') }}</label>
    <div>
        {{ Form::text('skill', $skill->skill, ['class' => 'form-control' .
        ($errors->has('skill') ? ' is-invalid' : ''), 'placeholder' => 'Skill']) }}
        {!! $errors->first('skill', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skill <b>skill</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('percentage') }}</label>
    <div>
        {{ Form::text('percentage', $skill->percentage, ['class' => 'form-control' .
        ($errors->has('percentage') ? ' is-invalid' : ''), 'placeholder' => 'Percentage']) }}
        {!! $errors->first('percentage', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skill <b>percentage</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $skill->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">skill <b>description</b> instruction.</small>
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
