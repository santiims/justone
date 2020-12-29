<template>
	<div>
		<div class="brown">
			<router-link :to="{name: 'start'}">
				<div class="back">
					<img src="back.svg" alt="back"/>
				</div>
			</router-link>

			<div class="logo">
				<img src="logo.svg" alt="logo"/>
			</div>

			<div class="register" @click="initRegister">
				Piereģistrēties
			</div>

			<div class="login" @click="initLogin">
				Ieiet
			</div>

			<div class="credentials">
				<VueInput @valueChanged="setUsername"/>
				<VueInput @valueChanged="setPassword" :isPassword="true"/>
			</div>

			<div class="continue" @click="submit">
				<img src="continue.svg" alt="continue"/>
			</div>
		</div>
	</div>
</template>

<script>
	import VueInput from './basic/input';

	export default {
		components: {
			VueInput
		},
		data() {
			return {
				anonymousUser: true,
				username: '',
				password: '',
			};
		},
		methods: {
			initRegister() {
				this.anonymousUser = true;
			},
			initLogin() {
				this.anonymousUser = false;
			},
			submit() {
				axios.post('/login-rpc', {
					username: this.username,
					password: this.password,
					anonymousUser: this.anonymousUser
				})
					.then(response => {
						const success = !!response.data;

						if (success) {
							this.$store.state.username = this.username;
							// All good, continue to next screen
							this.$router.push('join');
						}
					})
					.catch(e => console.log(e))
			},
			setUsername(username) {
				this.username = username;
			},
			setPassword(password) {
				this.password = password;
			}
		}
	};
</script>
