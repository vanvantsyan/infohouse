<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Կոդ') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Անուն Ազգանուն') !!}
    <p>{!! $user->full_name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Էլ.Հասցե') !!}
    <p>{!! $user->email !!}</p>
</div>
