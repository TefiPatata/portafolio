
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $client->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('location') }}</label>
    <div>
        {{ Form::text('location', $client->location, ['class' => 'form-control' .
        ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
        {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>location</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('job_position') }}</label>
    <div>
        {{ Form::text('job_position', $client->job_position, ['class' => 'form-control' .
        ($errors->has('job_position') ? ' is-invalid' : ''), 'placeholder' => 'Job Position']) }}
        {!! $errors->first('job_position', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>job_position</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('company') }}</label>
    <div>
        {{ Form::text('company', $client->company, ['class' => 'form-control' .
        ($errors->has('company') ? ' is-invalid' : ''), 'placeholder' => 'Company']) }}
        {!! $errors->first('company', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>company</b> instruction.</small>
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
