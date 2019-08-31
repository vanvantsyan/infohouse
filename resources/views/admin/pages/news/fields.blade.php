<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::text('id', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Վերնագիր *') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Նկարագիր ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','id'=>'description']) !!}

</div>

<!-- main_image Type -->
<div class="form-group">
    {!! Form::label('main_image', 'Գլխավոր նկար') !!}
    {!! Form::file('main_image', []) !!}
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Tags Field -->
<div class="form-group">
    {!! Form::label('meta', 'Meta') !!}
    {!! Form::text('meta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Ավելացնել', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('news.index') !!}" class="btn btn-default">Ընդհատել</a>
</div>

<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>