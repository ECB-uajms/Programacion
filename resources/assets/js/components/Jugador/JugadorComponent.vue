<template>
	<div class="row">
		<spinner v-show="loading"></spinner>
		<div class= "col-sm" v-for= "jugador in jugadores">
		<div class="card" style="width: 18rem;margin-top: 50px;">
		<img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" v-bind:src="jugador.picture" alt="Card image cap">
		<div class="card-body">
    			<div><h5 class="card-title text-center">{{ jugador.name }}</h5></div>
    			<div><p class="card-text"><b>Descripción: </b>Cualquier cosa</p></div>
    			<div class="text-center">
    			    <a href="/clubs" class="btn btn-info">Ver más. . .</a>
    			</div>
 		</div>
	</div>
	</div>	
</div>
</template>
<script>
    import EventBus from '../../event-bus';
	export default {
		data(){
			return{
				jugadores: [],
				loading: true
			}
		},
		created() {
			EventBus.$on('jugador-added', data => {
				this.jugadores.push(data)
			})
		},
        mounted() {
            axios
            .get('http://localhost:8000/jugadores')
            .then((res)=>{
            	this.jugadores=res.data
            	this.loading=false
            })
        }
    }
</script>