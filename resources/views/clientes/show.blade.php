@extends ('layouts.app')

@section ('title', 'Cliente')

@section ('content')
		<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$cliente->avatar}}" alt="">
		<div class="text-center">
			<h5 class="card-title">{{$cliente->name}}</h5>
			<p> {{$cliente->text}}</p>
			<a href="/clientes/{{$cliente->slug}}/edit" class="btn btn-primary">Editar</a>
			{!! Form::model(['route' => ['clientes.destroy', $cliente->slug], 'method' => 'DELETE']) !!}
			<p></p>
			{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
			{!! Form::close()!!}
		</div>
@endsection