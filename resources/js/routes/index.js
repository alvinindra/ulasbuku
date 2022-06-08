import VueRouter from 'vue-router'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Homepage',
            component: () => import('../pages/home/HomePage.vue'),
            meta: {
                title: 'UlasBuku'
            }
        }
    ],
    scrollBehavior (to, from) {
        if (to.name === from.name) {
            return false
        } else {
            return { x: 0, y: 0 }
        }
    }
})

export default router
