@extends ('layouts.app')

@section ('title', 'Clientes')

@section ('content')
<div class="row">
	@foreach($clientes as $cliente)
		<div class= "col-sm">
		<div class="card text-center" style="width: 18rem;margin-top: 50px;">
		<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" src="images/{{$cliente->avatar}}" alt="">
		<div class="card-body">
    			<h5 class="card-title">{{$cliente->name}}</h5>
    			<p class="card-text">{{$cliente->text}}</p>
    		<a href="/clientes/{{$cliente->slug}}" class="btn btn-primary">Ver más. . .</a>
 		</div>
	</div>
	</div>	
	@endforeach()
</div>
@endsection