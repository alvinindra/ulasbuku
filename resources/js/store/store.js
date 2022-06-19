import Vue from 'vue'
import Vuex from 'vuex'

import home from './modules/home.module.js'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        home
    }
})

export default store
