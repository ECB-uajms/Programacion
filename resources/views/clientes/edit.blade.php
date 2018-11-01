@extends ('layouts.app')

@section ('title', 'Modificar')

@section ('content')
	{!! Form::model($cliente, ['route' => ['clientes.update', $cliente], 'method' => 'PUT', 'files' => true]) !!}
	<p></p>
	@include('clientes.form')

	{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
	{!! Form::close()!!}	
@endsection