import Vue from 'vue'
// Axios
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

// Vue-Router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import routes from './router'

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});
