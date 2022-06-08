require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'
import AppLayout from './layouts/AppLayout.vue'
import router from './routes/index.js'
import store from './store/store.js'

Vue.config.productionTip = false
Vue.use(VueRouter)
new Vue({
    store,
    router,
    render: h => h(AppLayout)
}).$mount('#app')
