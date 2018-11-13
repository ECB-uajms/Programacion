<template>
    <div class="row">
        <spinner v-show="loading"></spinner>
        <div class= "col-sm" v-for= "club in clubes">
        <div class="card " style="width: 18rem;margin-top: 50px;">
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" v-bind:src="club.picture" alt="">
        <div class="card-body">
                <div><h5 class="card-title text-center">{{ club.name }}</h5></div>
                <div><p class="card-text"><b>Descripción: </b>Cualquier cosa</p></div>
                <div class="text-center">
                    <a href="/clubes/club" class="btn btn-info btn-responsive btninter"  data-target="#moreClub">Ver más. . .</a>
                </div>
        </div>
    </div>
    </div>  
</div>
</template>
<script>
    export default {
        data(){
            return{
                clubes: [],
                loading: true
            }
        },
        mounted() {
            axios
            .get('http://localhost:8000/clubes')
            .then((res)=>{
                this.clubes=res.data
                this.loading=false
            })
        }
    }
</script>