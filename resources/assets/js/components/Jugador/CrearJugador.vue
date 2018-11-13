<template>
  <div class="modal fade" id="addJugador" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Jugador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="GuardarJugador">
          <div class="form-group">
          <label>Jugador</label>
          <input type="text" class="form-control" placeholder="Ingresa el nombre del jugador" v-model= "name">
        </div>
        <div class="form-group">
          <label>Fotografia</label>
          <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" v-model= "picture">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>
</template>
<style>
  
</style>
<script>
  import EventBus from '../../event-bus';
  export default {
    data(){
      return {
        name:null,
        picture:null
      }
    }, methods: {
      GuardarJugador: function(){
        axios.post('http://localhost:8000/jugadores',{
          name:this.name,
          picture:this.picture
        })
        .then(function(res){
          $('#addJugador').modal('hide')
          EventBus.$emit('jugador-added',res.data.jugador)
        })
        .catch(function(err){
          console.log(err)
        });
      }
    }
}
</script>