<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Street Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Ավելացնել', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roles.index') !!}" class="btn btn-default">Ընդհատել</a>
</div>
