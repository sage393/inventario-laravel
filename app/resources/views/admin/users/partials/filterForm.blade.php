{!! Form::open(['route' => ['usuarios.show', 'busqueda'], 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search' ]) !!}
<div class="form-group">
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuario']) !!}
</div>
<button type="submit" class="btn btn-default">Buscar</button>
{!! Form::close() !!}
