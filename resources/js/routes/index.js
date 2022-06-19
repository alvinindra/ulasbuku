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
        },
        {
            path: '/search',
            name: 'ListBookPage',
            component: () => import('@pages/ListBookPage.vue'),
            meta: {
                title: 'Hasil Pencarian - UlasBuku'
            }
        },
        {
            path: '/about',
            name: 'AboutPage',
            component: () => import('@pages/AboutPage.vue'),
            meta: {
                title: 'Tentang - UlasBuku'
            }
        },
        {
            path: '/category',
            name: 'CategoryPage',
            component: () => import('@pages/CategoryPage.vue'),
            meta: {
                title: 'Kategori - UlasBuku'
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
