require('./frontend_bootstrap');
window.Vue = require('vue');

// ===============router=============
import router from "./Router/frontend_router.js";

Vue.component('app', require('./components/FrontendApp.vue').default);
// ===============app===============
const app = new Vue({
    el: '#app',
    router,
    data: {
        baseurl: laravel.baseurl,
        spinner: false
    }
});
