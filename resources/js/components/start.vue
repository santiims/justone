<template>
	<div>
		<div class="info">
			<router-link :to="{name: 'info'}">
				<img src="info.svg" alt="?"/>
			</router-link>
		</div>
		
		<div class="logo">
			<img src="logo.svg" alt="logo"/>
		</div>
		
		<p>
			Tā ir tava izvēle - izvēlies vislabāko <span>p</span><span>a</span><span>v</span><span>e</span><span>d</span><span>i</span><span>e</span><span>n</span><span>u</span>!
		</p>
		
		<router-link :to="{name: 'login'}">
			<button class="btn-start-game">
				Sākt spēli
			</button>
		</router-link>
		
		<div>
			<img src="players.svg" alt="players"/>
			3-7
		</div>
		
		<div>
			<img src="age.svg" alt="age"/>
			8+
		</div>
		
		<div>
			<img src="time.svg" alt="time"/>
			20 min
		</div>
	</div>
</template>

<script>
	export default {};
</script>