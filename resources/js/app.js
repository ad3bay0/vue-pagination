
import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import VueAxios from 'vue-axios';

import axios from 'axios';

Vue.use(VueAxios,axios);

import App from './App.vue';

const router = new VueRouter({mode:'history'});

new Vue(Vue.util.extend({router},App)).$mount('#app');