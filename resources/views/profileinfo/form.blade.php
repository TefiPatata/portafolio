
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $profileinfo->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $profileinfo->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>email</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('profile_photo') }}</label>
    <div>
        {{ Form::text('profile_photo', $profileinfo->profile_photo, ['class' => 'form-control' .
        ($errors->has('profile_photo') ? ' is-invalid' : ''), 'placeholder' => 'Profile Photo']) }}
        {!! $errors->first('profile_photo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>profile_photo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $profileinfo->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('phone') }}</label>
    <div>
        {{ Form::text('phone', $profileinfo->phone, ['class' => 'form-control' .
        ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>phone</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('location') }}</label>
    <div>
        {{ Form::text('location', $profileinfo->location, ['class' => 'form-control' .
        ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
        {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>location</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('aboutme_id') }}</label>
    <div>
        {{ Form::text('aboutme_id', $profileinfo->aboutme_id, ['class' => 'form-control' .
        ($errors->has('aboutme_id') ? ' is-invalid' : ''), 'placeholder' => 'Aboutme Id']) }}
        {!! $errors->first('aboutme_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>aboutme_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('work_id') }}</label>
    <div>
        {{ Form::text('work_id', $profileinfo->work_id, ['class' => 'form-control' .
        ($errors->has('work_id') ? ' is-invalid' : ''), 'placeholder' => 'Work Id']) }}
        {!! $errors->first('work_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>work_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('services_id') }}</label>
    <div>
        {{ Form::text('services_id', $profileinfo->services_id, ['class' => 'form-control' .
        ($errors->has('services_id') ? ' is-invalid' : ''), 'placeholder' => 'Services Id']) }}
        {!! $errors->first('services_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>services_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('portfolio_id') }}</label>
    <div>
        {{ Form::text('portfolio_id', $profileinfo->portfolio_id, ['class' => 'form-control' .
        ($errors->has('portfolio_id') ? ' is-invalid' : ''), 'placeholder' => 'Portfolio Id']) }}
        {!! $errors->first('portfolio_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>portfolio_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('socialnetworks_id') }}</label>
    <div>
        {{ Form::text('socialnetworks_id', $profileinfo->socialnetworks_id, ['class' => 'form-control' .
        ($errors->has('socialnetworks_id') ? ' is-invalid' : ''), 'placeholder' => 'Socialnetworks Id']) }}
        {!! $errors->first('socialnetworks_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>socialnetworks_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('skillssection_id') }}</label>
    <div>
        {{ Form::text('skillssection_id', $profileinfo->skillssection_id, ['class' => 'form-control' .
        ($errors->has('skillssection_id') ? ' is-invalid' : ''), 'placeholder' => 'Skillssection Id']) }}
        {!! $errors->first('skillssection_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>skillssection_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('messages_id') }}</label>
    <div>
        {{ Form::text('messages_id', $profileinfo->messages_id, ['class' => 'form-control' .
        ($errors->has('messages_id') ? ' is-invalid' : ''), 'placeholder' => 'Messages Id']) }}
        {!! $errors->first('messages_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">profileinfo <b>messages_id</b> instruction.</small>
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
