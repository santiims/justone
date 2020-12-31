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
        <div class="text-center mt-5">
            <div class="d-inline-flex flex-column">
                <button class="btn btn-outline-danger btn-lg mb-3">
                    Izveidot spēli
                </button>

                <button class="btn btn-outline-danger btn-lg">
                    Pievienoties
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        getMessage() {
            // todo: VueX
            return `Čau, ${this.$store.state.username}!`;
        }
    }
}
</script>