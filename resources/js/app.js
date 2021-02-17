window.Vue = require('vue');

Vue.component('v-navbar', require('./components/navbar.vue').default);
Vue.component('v-main-container', require('./components/conainer-main.vue').default);
Vue.component('v-about-me', require('./components/about-me').default);
Vue.component('v-job-experience', require('./components/job-experience').default);
Vue.component('v-education', require('./components/education').default);
Vue.component('v-briefcase', require('./components/briefcase').default);

import vuetify from './components/plugins/vuetify'

var app = new Vue({
    vuetify,
    created () {

    }
}).$mount('#app');
