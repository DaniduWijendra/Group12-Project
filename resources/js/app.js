require('./bootstrap')

window.Vue=require('vue')

Vue.component('mainapp',require('./components/mainApp.vue').default)


import router from './router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify);



const app=new Vue({
    el:'#app',
    vuetify:new Vuetify(),
    router,
})