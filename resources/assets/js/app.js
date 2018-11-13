
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('club', require('./components/Club/ClubComponent.vue'));
Vue.component('jugador', require('./components/Jugador/JugadorComponent.vue'));
Vue.component('agregarclub', require('./components/Club/AgregarClub.vue'));
Vue.component('agregarjugador', require('./components/Jugador/AgregarJugador.vue'));
Vue.component('crearclub', require('./components/Club/CrearClub.vue'));
Vue.component('crearjugador', require('./components/Jugador/CrearJugador.vue'));

Vue.component('spinner', require('./components/Spinner.vue'));

const app = new Vue({
    el: '#app'
});
