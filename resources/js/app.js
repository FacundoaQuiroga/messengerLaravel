
require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

Vue.use(BootstrapVue);

Vue.use(IconsPlugin);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    methods: {
        logout() {
            document.getElementById('logout-form').submit();
        }
    },
});
