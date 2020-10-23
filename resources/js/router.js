import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)


//project pages
import home from './components/home.vue'
import about from './components/Pages/about.vue'
import services from './components/Pages/services.vue'
import contacts from './components/Pages/contact.vue'
import FAQ from './components/Pages/faq.vue'
import adsignup from './components/Pages/admin-signup.vue'
import agsignup from './components/Pages/agent-signup.vue'
import signup from './components/Pages/policyholder-signup.vue'//policy holder
import login from './components/Pages/login.vue'

const routes=[
    //project routes

     


    //home
    {

        path:'/',
        component:home,
    },

    {

        path:'/about',
        component:about,
    },

    {

        path:'/services',
        component:services,
    },
    {

        path:'/contact',
        component:contacts,
    },
    {

        path:'/faq',
        component:FAQ,
    },
    {
        path:'/admin-signup',
        component:adsignup,
    },
    {
        path:'/agent-signup',
        component:agsignup,
    },
    {
        path:'/signup',
        component:signup,
    },
    {
        path:'/login',
        component:login,
    },

    




    



   


];

export default new Router({
    mode:'history',
    routes
});