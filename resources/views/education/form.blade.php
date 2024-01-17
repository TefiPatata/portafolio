
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('time_frame') }}</label>
    <div>
        {{ Form::text('time_frame', $education->time_frame, ['class' => 'form-control' .
        ($errors->has('time_frame') ? ' is-invalid' : ''), 'placeholder' => 'Time Frame']) }}
        {!! $errors->first('time_frame', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">education <b>time_frame</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('degree') }}</label>
    <div>
        {{ Form::text('degree', $education->degree, ['class' => 'form-control' .
        ($errors->has('degree') ? ' is-invalid' : ''), 'placeholder' => 'Degree']) }}
        {!! $errors->first('degree', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">education <b>degree</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('institute') }}</label>
    <div>
        {{ Form::text('institute', $education->institute, ['class' => 'form-control' .
        ($errors->has('institute') ? ' is-invalid' : ''), 'placeholder' => 'Institute']) }}
        {!! $errors->first('institute', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">education <b>institute</b> instruction.</small>
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
