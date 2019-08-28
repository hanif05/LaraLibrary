import Vue from 'vue'
import router from './router.js'
import App from './App.vue'
import store from './store.js'

new Vue({
	el: '#library',
	router,
	store,
	components: {
		App
	}
})
