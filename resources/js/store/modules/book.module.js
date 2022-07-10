import { apiClient } from '@src/utils/api-client.js'

const state = () => ({})

const mutations = {}

const actions = {
    getBook (_, payload) {
        return new Promise((resolve, reject) => {
            apiClient
                .get(`/books/${payload}`)
                .then(response => {
                    resolve(response)
                })
                .catch(error => {
                    reject(error)
                })
        })
    },
    getListDetailReviews (_, payload) {
        return new Promise((resolve, reject) => {
            apiClient
                .get(`/books/${payload.slug}/reviews`, {
                    params: payload.params
                })
                .then(response => {
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
