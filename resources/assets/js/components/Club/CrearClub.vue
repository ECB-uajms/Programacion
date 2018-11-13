<template>
  <div class="modal fade" id="addClub" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Club</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form @submit.prevent="GuardarClub">
          <div class="form-group">
          <label>Club</label>
          <input type="text" class="form-control" placeholder="Ingresa el nombre del club" v-model= "name">
        </div>
        <div class="form-group">
          <label>Escudo</label>
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
  export default {
    data(){
      return {
        name:null,
        picture:null
      }
    }, methods: {
      GuardarClub: function(){
        axios.post('http://localhost:8000/clubes',{
          name:this.name,
          picture:this.picture
        })
        .then(function(res){
          console.log(res)
          $('#addclub').modal('hide')
        })
        .catch(function(err){
          console.log(err)
        });
      }
    }
}
</script>