<template>
    <div class="container mt-2">
        <div class="d-flex align-items-center">
            <div class="logo d-inline">
                <img src="images\logo.svg" alt="logo" class="logo-small"/>
            </div>
            <div class="message d-inline px-3">
                <h5 class="color-brown m-0 font-weight-bold">{{ getMessage }}</h5>
            </div>
            <div class="info d-inline ml-auto">
                <router-link :to="{name: 'info'}">
                    <img src="images\info.svg" alt="?" class="filter-brown info-size"/>
                </router-link>
            </div>
        </div>

        <h2>Pievienoties</h2>

        <VueInput @valueChanged="setCode"></VueInput>

        <p v-if="error">{{ error }}</p>
    </div>
</template>

<script>
    import VueInput from './basic/input';
    import { getUsername } from "../helpers";

    export default {
        name: "join",
        mounted() {
            getUsername(this.$store.state);
        },
        data() {
            return {
                error: ''
            };
        },
        components: {VueInput},
        computed: {
            getMessage() {
                return `Čau, ${this.$store.state.username}!`;
            }
        },
        methods: {
            setCode(code) {
                this.$store.state.code = code;
                axios.post('/game-rpc/join', {
                    code
                }).then(response => {
                    if (!!response.data) {
                        this.$router.push('play');
                    } else {
                        this.error = 'Istaba ar šādu kodu neeksistē!';
                    }
                })
            }
        }
    }
</script>
