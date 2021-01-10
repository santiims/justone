<template>
	<div>
		<div class="brown">
			<div class="bg-color-brown">
				<router-link :to="{name: 'start'}">
					<div class="back">
						<img src="images\back.svg" alt="back" class="filter-white arrow-size"/>
					</div>
				</router-link>

				<div class="logo">
					<img src="images\logo.svg" alt="logo" class="logo-medium d-block mx-auto"/>
				</div>
				<div class="d-flex flex-row text-center text-white">
					<div :class="getRegisterClass" @click="initRegister">
						PIEREĢISTRĒTIES
					</div>

					<div :class="getLoginClass" @click="initLogin">
						IEIET
					</div>
				</div>
			</div>
			<div class="credentials my-4 text-center">
				<VueInput @valueChanged="setUsername" :limit="10" :placeholder="'Lietotājvārds'"/>
                <div class="mb-3"></div>
				<VueInput @valueChanged="setPassword" :isPassword="true" :placeholder="'Parole'"/>
			</div>

			<div class="continue bg-color-brown py-1" @click="submit">
				<img src="images\continue.svg" alt="continue" class="filter-white arrow-size d-block mx-auto"/>
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
        computed: {
		    getRegisterClass() {
		        const baseClass = 'register py-3 flex-grow-1';

		        return this.anonymousUser ? baseClass + ' login-signup-active-bar' : baseClass;
            },
            getLoginClass() {
		        const baseClass = 'login py-3 flex-grow-1';

		        return this.anonymousUser ? baseClass : baseClass + ' login-signup-active-bar';
            },
        },
		methods: {
			initRegister() {
				this.anonymousUser = true;
			},
			initLogin() {
				this.anonymousUser = false;
			},
			submit() {
				axios.post('/login-rpc/login', {
					username: this.username,
					password: this.password,
					anonymousUser: this.anonymousUser
				})
					.then(response => {
						if (!!response.data) {
							this.$store.state.username = this.username;
							// All good, continue to next screen
							this.$router.push('createjoin');
						}
					})
					.catch(e => {
						console.log(e);
						alert('Something went wrong! Try refreshing the page and logging in again');
					})
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
