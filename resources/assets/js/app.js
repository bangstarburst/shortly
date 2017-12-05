
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



Vue.component('one-component', require('./components/OneComponent.vue'));


Vue.component('two-component', require('./components/TwoComponent.vue'));
Vue.component('three-component', require('./components/ThreeComponent.vue'));


const one = new Vue({
    el: '#one'
});

const two = new Vue({
    el: '#two'
});
