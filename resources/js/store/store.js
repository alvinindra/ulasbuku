import Vue from 'vue'
import Vuex from 'vuex'

import home from './modules/home.module.js'
import category from './modules/category.module.js'
import search from './modules/search.module.js'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        home,
        category,
        search
    }
})

export default store
