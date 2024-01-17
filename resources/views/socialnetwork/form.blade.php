
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('url_net') }}</label>
    <div>
        {{ Form::text('url_net', $socialnetwork->url_net, ['class' => 'form-control' .
        ($errors->has('url_net') ? ' is-invalid' : ''), 'placeholder' => 'Url Net']) }}
        {!! $errors->first('url_net', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">socialnetwork <b>url_net</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('icon') }}</label>
    <div>
        {{ Form::text('icon', $socialnetwork->icon, ['class' => 'form-control' .
        ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}
        {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">socialnetwork <b>icon</b> instruction.</small>
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
