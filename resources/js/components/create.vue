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
        <div class="text-center container">
            <h2>Izveidot spēli</h2>

            <p class="text-left">Istabas kods:</p>

            <h3 v-if="code">{{ code }}</h3>

            <button class="btn btn-outline-danger btn-lg" @click="start">Izveidot</button>
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
        name: "create",
        mounted() {
            getUsername(this.$store.state);
            this.getCode();
        },
        data() {
            return {
                code: null
            }
        },
        computed: {
            getMessage() {
                return `Čau, ${this.$store.state.username}!`;
            }
        },
        methods: {
            async getCode() {
                axios.post('/game-rpc/get-code')
                    .then(response => this.code = response.data.code);
            },
            start() {
                axios.post('/game-rpc/start', {
                    code: this.code
                });

                this.$store.state.code = this.code;
                this.$router.push('play');
            }
        }
    }
</script>

<style scoped>

</style>
