
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $service->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('icon_url') }}</label>
    <div>
        {{ Form::text('icon_url', $service->icon_url, ['class' => 'form-control' .
        ($errors->has('icon_url') ? ' is-invalid' : ''), 'placeholder' => 'Icon Url']) }}
        {!! $errors->first('icon_url', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>icon_url</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $service->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('list') }}</label>
    <div>
        {{ Form::text('list', $service->list, ['class' => 'form-control' .
        ($errors->has('list') ? ' is-invalid' : ''), 'placeholder' => 'List']) }}
        {!! $errors->first('list', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">service <b>list</b> instruction.</small>
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
