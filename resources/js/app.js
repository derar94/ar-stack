import { routes } from './routes';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Main from './components/Main.vue';
import VueTimeago from 'vue-timeago'
import { VclFacebook, VclInstagram } from 'vue-content-loading';

window.Vue = require('vue');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VueTimeago, {
    name: 'Timeago', // Component name, `Timeago` by default
    locale: 'en', // Default locale
    // We use `date-fns` under the hood
    // So you can use all locales from it
    locales: {
        'zh-CN': require('date-fns/locale/zh_cn'),
        ja: require('date-fns/locale/ja')
    }
})
const router = new VueRouter({
    mode: 'history',
    routes: routes,
});
Vue.component('facebook-loader', VclFacebook)

const app = new Vue({
    el: '#app',

    router: router,
    render: h => h(Main)
});