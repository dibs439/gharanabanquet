/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Vue.use(BootstrapVue);
// import 'bootstrap-vue/dist/bootstrap-vue.css';

import VueRouter from 'vue-router'
Vue.use(VueRouter);

/*let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue') },
    { path: '/profile', component: require('./components/Profile.vue') }
]


const router = new VueRouter([
    routes //
])*/

window.Form = Form;

import Dashboard from './components/Dashboard'
import Profile from './components/Profile'
import Users from './components/Users'
import { Form, HasError, AlertError } from 'vform'
import moment from 'moment';

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            component: Dashboard
        },
        {
            path: '/profile',
            component: Profile,
        },
        {
            path: '/users',
            component: Users,
        },
    ],
});

const app = new Vue({
    el: '#app',
    //components: { App },
    router,
});

Vue.filter('mydate', function(created) {
    //return moment(created).format("MMM Do YY");
    return moment(created).format("MMM Do YYYY");
});



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*const app = new Vue({
    el: '#app',
    router
});*/
