/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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
Vue.component('plan-template', {
    template: '#plan-template',
        props: {
            name: {
                type: String
            },  
            price: {
                type: Number
            },
            storage: {
                 type: Number

            },
            mailInc: {
                type: Boolean
            },

        }


})
Vue.component('pricing-plan',{ 
template: '#pricing-plan',

data(){
    return{
        plans: [{
            name: 'Basic',
            price: 10,
            storage: 10,
            mailInc: false,
        },
        {
            name: 'Premium',
            price: 60,
            storage: 60,
            mailInc: false,
        },
        {
            name: 'Pro',
            price: 100,
            storage: 100,
            mailInc: true,
        }
    
    ],
        
    }
}

})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    
});
