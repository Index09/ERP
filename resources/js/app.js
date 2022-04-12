/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
Vue.use(require('vue-moment'));



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

Vue.component('purchase-component', require('./components/PurchaseComponant.vue').default);


Vue.component('sellorder-component', require('./components/SellOrderComponant.vue').default);


Vue.component('sellorders-component', require('./components/SellOrdersComponant.vue').default);

Vue.component('customeraccounting-component', require('./components/CustomeraccountingComponent.vue').default);

Vue.component('customers-component', require('./components/CustomersComponent.vue').default);


Vue.component('suppliers-component', require('./components/SuppliersComponent.vue').default);


Vue.component('print-sellorder', require('./components/print/SupplierPricing.vue').default);




Vue.component('products-component', require('./components/ProductsComponent.vue').default);

Vue.component('invintories-component', require('./components/InvintoriesComponent.vue').default);
Vue.component('sellorderwpay-component', require('./components/SellOrderwpayComponent.vue').default);

Vue.component('pagination', require('laravel-vue-pagination'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    
});
