<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::text('id', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Անուն Ազգանուն') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Role -->
<div class="form-group">
    {!! Form::label('role_id', 'Պաշտոն') !!}
    {!! Form::select('role_id', $roleList, null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Էլ.հասցե') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Գաղտնաբառ') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Password Confirmation Field -->
<div class="form-group">
    {!! Form::label('password-confirmation', 'Գաղտնաբառի կրկնություն:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Ավելացնել', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Ընդհատել</a>
</div>
