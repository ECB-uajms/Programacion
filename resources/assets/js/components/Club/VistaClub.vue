<template>
	<div v-for= "club in clubes" id="moreClub">
		<spinner v-show="loading"></spinner>
		<img style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px; " class="card-img-top rounded-circle mx-auto d-block" v-bind:src="{{club.picture}}" alt="">
		<div class="text-center">
			<h5 class="card-title">{{club.name}}</h5>
			<p> Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			<a href="" class="btn btn-primary">Go somewhere</a>
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