{!! Form::open(['route' => ['roles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('roles.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fas fa-eye"></i>
    </a>
    <a href="{{ route('roles.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fas fa-edit"></i>
    </a>
</div>
{!! Form::close() !!}
