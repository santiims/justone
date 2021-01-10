<template>
    <div class="container mt-2">
        <div class="d-flex align-items-center">
            <div class="logo d-inline">
                <img src="images\logo.svg" alt="logo" class="logo-small"/>
            </div>
            <div class="message d-inline px-3">
                <h5 class="m-0 font-weight-bold">{{ getMessage }}</h5>
            </div>
            <div class="info d-inline ml-auto">
	        	<router-link :to="{name: 'info'}">
	        		<img src="images\info.svg" alt="?" class="filter-brown info-size"/>
	        	</router-link>
	        </div>
        </div>
        <div class="text-center mt-5">
            <div class="d-inline-flex flex-column">
                <router-link :to="{name: 'create'}">
                    <button class="btn btn-outline-danger btn-lg mb-3">
                        Izveidot spēli
                    </button>
                </router-link>

                <router-link :to="{name: 'join'}">
                    <button class="btn btn-outline-danger btn-lg">
                        Pievienoties
                    </button>
                </router-link>
            </div>
        </div>
    </div>
</template>

<style scoped>
button {
    border-radius: 35px;
}
</style>

<script>
import { getUsername } from '../helpers';

export default {
    name: 'createjoin',
    mounted() {
        getUsername(this.$store.state);
    },
    computed: {
        getMessage() {
            return `Čau, ${this.$store.state.username}!`;
        }
    }
}
</script>
