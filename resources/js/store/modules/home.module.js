import { apiClient } from '@src/utils/api-client.js'

const state = () => ({
    books: []
})

const mutations = {
    SET_BOOKS (state, payload) {
        state.books = payload
    }
}

const actions = {
    getListBooks ({ commit }) {
        apiClient.get('/books').then(response => {
            commit('SET_BOOKS', response.data)
        })
    }
}

const getters = {}

export default {
    namespaced: true,
    state,
    mutations,
    actions,
    getters
}
