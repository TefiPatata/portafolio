
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name_project') }}</label>
    <div>
        {{ Form::text('name_project', $portfolio->name_project, ['class' => 'form-control' .
        ($errors->has('name_project') ? ' is-invalid' : ''), 'placeholder' => 'Name Project']) }}
        {!! $errors->first('name_project', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>name_project</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('type_project') }}</label>
    <div>
        {{ Form::text('type_project', $portfolio->type_project, ['class' => 'form-control' .
        ($errors->has('type_project') ? ' is-invalid' : ''), 'placeholder' => 'Type Project']) }}
        {!! $errors->first('type_project', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>type_project</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('participation') }}</label>
    <div>
        {{ Form::text('participation', $portfolio->participation, ['class' => 'form-control' .
        ($errors->has('participation') ? ' is-invalid' : ''), 'placeholder' => 'Participation']) }}
        {!! $errors->first('participation', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>participation</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('photo1') }}</label>
    <div>
        {{ Form::text('photo1', $portfolio->photo1, ['class' => 'form-control' .
        ($errors->has('photo1') ? ' is-invalid' : ''), 'placeholder' => 'Photo1']) }}
        {!! $errors->first('photo1', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>photo1</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('photo2') }}</label>
    <div>
        {{ Form::text('photo2', $portfolio->photo2, ['class' => 'form-control' .
        ($errors->has('photo2') ? ' is-invalid' : ''), 'placeholder' => 'Photo2']) }}
        {!! $errors->first('photo2', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>photo2</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $portfolio->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('client_id') }}</label>
    <div>
        {{ Form::text('client_id', $portfolio->client_id, ['class' => 'form-control' .
        ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Client Id']) }}
        {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>client_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('skills_id') }}</label>
    <div>
        {{ Form::text('skills_id', $portfolio->skills_id, ['class' => 'form-control' .
        ($errors->has('skills_id') ? ' is-invalid' : ''), 'placeholder' => 'Skills Id']) }}
        {!! $errors->first('skills_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">portfolio <b>skills_id</b> instruction.</small>
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
