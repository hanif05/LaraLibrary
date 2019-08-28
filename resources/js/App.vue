<template>
	<div>
		<app-header v-if="isAuth" />
		<app-nav v-if="isAuth"/>
		<div>
			<router-view></router-view>
		</div>
		<app-footer v-if="isAuth" />
	</div>
</template>

<script>
	import { mapState, mapGetters } from 'vuex'
	import Header from './components/Header.vue'
	import Footer from './components/Footer.vue'
	import Nav from './components/Nav.vue'
	export default {
		computed: {
			...mapState(['token']),
			...mapGetters(['isAuth'])
		},
		components: {
			'app-header': Header,
			'app-footer': Footer,
			'app-nav' : Nav
		}
	}
</script>