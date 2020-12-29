require('./bootstrap');

import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import Main from './components/main';
import Start from './components/start';
import Info from './components/info';
import Login from './components/login';
import Join from './components/join';

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store({
	state: {
		username: '',
	},
	mutations: {

	},
	actions: {

	},
	getters: {
		username() {
			return this.state.username;
		}
	}
});

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '',
			name: 'start',
			component: Start
		},
		{
			path: '/info',
			name: 'info',
			component: Info
		},
		{
			path: '/login',
			name: 'login',
			component: Login
		},
		{
			path: '/join',
			name: 'join',
			component: Join
		}
	]
});

const app = new Vue({
	el: '#main',
	router,
	store,
	render: h => h(Main)
});