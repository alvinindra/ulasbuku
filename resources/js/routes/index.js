import VueRouter from 'vue-router'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'HomePage',
            component: () => import('@pages/HomePage.vue'),
            meta: {
                title: 'UlasBuku'
            }
        },
        {
            path: '/book/:id',
            name: 'DetailBookPage',
            component: () => import('@pages/DetailBookPage.vue'),
            meta: {
                title: 'Rindu Tere Liye - UlasBuku'
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
