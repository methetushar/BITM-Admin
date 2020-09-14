import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// ========== define route==========
const routes = [
    { path: '/', name: 'home.page', component: () => import('./../views/frontend/Home') },
    {
        path: '/', component: () => import('./../views/frontend/Home'),
        // chlidren menu
        children: []
    }
]

// ========== define router==========
const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
    base: process.env.MIX_VUE_ROUTER_BASE,
    linkExactActiveClass: "active",
    scrollBehavior() {
        return { x: 0, y: 0 };
    }
})

export default router
