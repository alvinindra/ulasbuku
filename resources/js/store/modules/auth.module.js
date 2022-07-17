import { apiClient } from '@src/utils/api-client.js'

const user = JSON.parse(localStorage.getItem('user-loggedin'))

const state = () => ({
    token: localStorage.getItem('token') || null,
    user: JSON.parse(localStorage.getItem('user-loggedin')) || {},
    loggedIn: user ? true : false
})

const mutations = {
    SET_USER (state, payload) {
        state.loggedIn = true
        state.user = payload
        const userData = JSON.stringify(payload)
        localStorage.setItem('user-loggedin', userData)
    },
    SET_LOGOUT () {
        state.loggedIn = false
        state.user = {}
        localStorage.removeItem('user-loggedin')
        localStorage.removeItem('token')
        window.location = '/'
    }
}

const actions = {
    getProfile ({ commit }) {
        return new Promise((resolve, reject) => {
            apiClient
                .get('/profile')
                .then(response => {
                    commit('SET_USER', response.data.data)
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    postLogin (_, payload) {
        return new Promise((resolve, reject) => {
            apiClient
                .post('/login', payload)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    postRegister (_, payload) {
        return new Promise((resolve, reject) => {
            apiClient
                .post('/register', payload)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    logout ({ commit }) {
        return new Promise(resolve => {
            apiClient
                .post('/logout')
                .then(response => {
                    commit('SET_LOGOUT')
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
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