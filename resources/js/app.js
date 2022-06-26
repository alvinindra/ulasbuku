require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'
import AppLayout from './layouts/AppLayout.vue'
import router from './routes/index.js'
import store from './store/store.js'
import StarRating from 'vue-star-rating'
import ScrollLoader from 'vue-scroll-loader'

Vue.config.productionTip = false
Vue.use(VueRouter)
Vue.use(ScrollLoader)

Vue.component('star-rating', StarRating)

new Vue({
    store,
    router,
    render: h => h(AppLayout)
}).$mount('#app')
