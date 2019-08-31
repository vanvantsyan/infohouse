<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Կոդ') !!}
    <p>{!! $news->id !!}</p>
</div>

<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('title', 'Վերնագիր') !!}
    <p>{!! $news->full_name !!}</p>
</div>

<!-- Բնութագիր Field -->
<div class="form-group">
    {!! Form::label('description', 'Բնութագիր') !!}
    <p>{!! $news->description !!}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    <p>{!! $news->slug !!}</p>
</div>
