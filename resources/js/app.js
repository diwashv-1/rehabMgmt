/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/*Vue Select*/
import Vue from 'vue'
import vSelect from 'vue-select'

Vue.component('v-select', vSelect);
import 'vue-select/dist/vue-select.css'

import 'vue-search-select/dist/VueSearchSelect.css';
/*-----*/

/*Testing*/
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);
/*Vue.component('demo-component', require('./components/DemoFormComponent.vue').default);*/

Vue.component('client-component-validate', require('./components/ClientFormValidate.vue').default);
Vue.component('client-component', require('./components/ClientFormComponent.vue').default);
/*Client*/
Vue.component('client-entry-textarea-component', require('./components/Client/ClientEntryTextareaComponent.vue').default);
Vue.component('client-entry-component', require('./components/Client/ClientEntryComponent.vue').default);
Vue.component('client-entry-validate', require('./components/Client/ClientEntryValidate.vue').default);
Vue.component('bill', require('./components/Client/Bill.vue').default);

Vue.component('client-search', require('./components/Client/ClientSearch.vue').default);
Vue.component('select-client-search', require('./components/Client/SelectClientSearch.vue').default);
Vue.component('client-register', require('./components/Client/RegisterClient.vue').default);

Vue.component('clients-payment', require('./components/Client/ClientPaymentForm.vue').default);
Vue.component('clients-payment-view', require('./components/Client/ClientPaymentView.vue').default);

Vue.component('client-expenses', require('./components/Client/ClientExpenses.vue').default);
Vue.component('client-expenses-view', require('./components/Client/ClientExpensesView.vue').default);
Vue.component('client-expenses-modal', require('./components/Client/ClientExpensesModal.vue').default);

Vue.component('client-details', require('./components/Client/ClientDetails.vue').default);

/*Organizatios*/
Vue.component('organization-expenses', require('./components/Organization/OrganizationExpenses.vue').default);
Vue.component('organization-expenses-view', require('./components/Organization/OrganizationExpensesView.vue').default);
Vue.component('donator-payment', require('./components/Organization/DonatorForm.vue').default);
Vue.component('donator-payment-view', require('./components/Organization/DonationFormView.vue').default);

/*Setup*/
Vue.component('package-setup', require('./components/Setup/PackageSetup.vue').default);
Vue.component('expenses-setup', require('./components/Setup/ExpensesSetup.vue').default);

/*Components*/
Vue.component('textbox-component', require('./components/Components/TextBoxComponent.vue').default);
Vue.component('textarea-component', require('./components/Components/TextareaComponent.vue').default);
Vue.component('selectoption-component', require('./components/Components/SelectOptionComponent.vue').default);





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
