@extends ('layouts.app')

@section ('title', 'Crear')

@section ('content')
	@if ($errors->any())
	<div class="alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>
	</div>
		
	@endif
	{!! Form::open(['route' => 'clientes.store', 'method' => 'POST', 'files' => true]) !!}
	<p></p>
	@include ('clientes.form')
	{!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}
		
@endsection