
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('title') }}</label>
    <div>
        {{ Form::text('title', $aboutme->title, ['class' => 'form-control' .
        ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
        {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">aboutme <b>title</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('subtitle') }}</label>
    <div>
        {{ Form::text('subtitle', $aboutme->subtitle, ['class' => 'form-control' .
        ($errors->has('subtitle') ? ' is-invalid' : ''), 'placeholder' => 'Subtitle']) }}
        {!! $errors->first('subtitle', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">aboutme <b>subtitle</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $aboutme->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">aboutme <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('photo_desc') }}</label>
    <div>
        {{ Form::text('photo_desc', $aboutme->photo_desc, ['class' => 'form-control' .
        ($errors->has('photo_desc') ? ' is-invalid' : ''), 'placeholder' => 'Photo Desc']) }}
        {!! $errors->first('photo_desc', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">aboutme <b>photo_desc</b> instruction.</small>
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
