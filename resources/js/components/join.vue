<template>
    <div>
        <div class="logo">
            <img src="logo.svg" alt="logo"/>
        </div>

        <div class="message">
            <p>{{ getMessage }}</p>
        </div>

        <div class="info">
			<router-link :to="{name: 'info'}">
				<img src="info.svg" alt="?"/>
			</router-link>
		</div>

        <button class="btn-create">
            Izveidot spēli
        </button>

        <button class="btn-join">
            Pievienoties
        </button>
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