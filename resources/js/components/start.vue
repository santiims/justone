<template>
	<div class="container mt-2">
		<div class="info">
			<router-link :to="{name: 'info'}">
				<img src="images\info.svg" alt="?" class="filter-brown info-size ml-auto d-block"/>
			</router-link>
		</div>
		
		<div class="logo">
			<img src="images\logo.svg" alt="logo" class="logo-big mx-auto d-block"/>
		</div>

		<div class="mt-5">
			<p class="font-20">
				Tā ir tava izvēle -<br> izdomā vislabāko <span>p</span><span>a</span><span>v</span><span>e</span><span>d</span><span>i</span><span>e</span><span>n</span><span>u</span>!
			</p>

			<router-link :to="{name: 'login'}">
				<button class="btn btn-outline-danger btn-lg my-5 mx-auto d-block">
					<span class="color-brown">Sākt spēli</span>
				</button>
			</router-link>

			<div>
				<img src="images\players.svg" alt="players" class="filter-brown d-inline"/>
				<span class="color-brown font-10 d-inline">3-7</span>
			</div>

			<div>
				<img src="images\age.svg" alt="age" class="filter-brown d-inline"/>
				<span class="color-brown font-10 d-inline">8+</span>
			</div>

			<div>
				<img src="images\time.svg" alt="time" class="filter-brown d-inline"/>
				<span class="color-brown font-10 d-inline">20 min</span>
			</div>
		</div>

	</div>
</template>

<style scoped>
	.btn:hover {
		background-color: #FDFBF7;
	}
</style>

<script>
	export default {};
</script>