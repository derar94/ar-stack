import { routes } from './routes';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Main from './components/Main.vue';
window.Vue = require('vue');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(Main)
});