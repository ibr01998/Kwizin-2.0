import axios from "axios";
export const state = () => ({
    user: [],
})
export const actions = {
    async getUser ({commit}) {
        const user = await axios.get('http://127.0.0.1:8000/api/user').then(r => r.data)
        commit('isUser', user)
        return user
    }
}

export const mutations = {
    isUser (state, user) {
        state.user = user
    }
}