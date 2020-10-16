import Vue from 'vue'
import Router from 'vue-router'
import home from './components/pages/home'
import tags from './components/pages/tag'
Vue.use(Router)
const routes = [
    //project routes
    {
        path:'/fd',
        component: home
    },
    {
        path:'/tags',
        component: tags
    },
    
]

export default new Router(
    {
        mode:'history',
        routes
    }
)