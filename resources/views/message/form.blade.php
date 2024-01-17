
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name_sender') }}</label>
    <div>
        {{ Form::text('name_sender', $message->name_sender, ['class' => 'form-control' .
        ($errors->has('name_sender') ? ' is-invalid' : ''), 'placeholder' => 'Name Sender']) }}
        {!! $errors->first('name_sender', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">message <b>name_sender</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('mail_sender') }}</label>
    <div>
        {{ Form::text('mail_sender', $message->mail_sender, ['class' => 'form-control' .
        ($errors->has('mail_sender') ? ' is-invalid' : ''), 'placeholder' => 'Mail Sender']) }}
        {!! $errors->first('mail_sender', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">message <b>mail_sender</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email_subject') }}</label>
    <div>
        {{ Form::text('email_subject', $message->email_subject, ['class' => 'form-control' .
        ($errors->has('email_subject') ? ' is-invalid' : ''), 'placeholder' => 'Email Subject']) }}
        {!! $errors->first('email_subject', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">message <b>email_subject</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('body_message') }}</label>
    <div>
        {{ Form::text('body_message', $message->body_message, ['class' => 'form-control' .
        ($errors->has('body_message') ? ' is-invalid' : ''), 'placeholder' => 'Body Message']) }}
        {!! $errors->first('body_message', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">message <b>body_message</b> instruction.</small>
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
