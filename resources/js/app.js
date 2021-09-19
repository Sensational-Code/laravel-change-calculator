
import './bootstrap';
import Vue from 'vue';
import App from './components/App.vue';

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue';

// Install BootstrapVue
Vue.use(BootstrapVue);

// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin);

const app = new Vue({
	el: '#app',
	render: h => h(App)
});
