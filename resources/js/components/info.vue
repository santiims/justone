<template>
	<div class="container mt-2">
		<img src="images\logo.svg" alt="logo" class="logo-small d-inline"/>
		<h3 class="d-inline">Par spēli</h3>
		
		<p class="mt-4">
			<b>
				"Tikai Viens" ir kooperatīva ballīšu spēle.
				Darbojieties kopā, lai atklāti tik daudz slepeno vārdu, cik vien iespējams!
				Izdomājiet vislabākos pavedienus, lai palīdzētu komandas biedram, un esiet radoši, jo vienādie pavedieni tiks izslēgti!
			</b>
		</p>
		
		<p>
			Kopā ielieciet vienam no spēlētājiem - aktīvajam spēlētājam - atminēt slepeno vārdu, slepeni uzrakstot pavedienu.
			Izvēlieties savu pavedienu nepārrunājot to ar citiem spēlētājiem un esiet radošs, lai izdomātu tādu pavedienu, kāds nebūs ienācis prātā kādam citam spēlētājam.
		</p>
		
		<p>
			Lai iegūtu savu rezultātu, saskaitiet savus veiksmīgi atminētās kārtis un salīdziniet to kopējo skaitu ar tabulu.
		</p>
		
		<h3 class="mt-4">Spēles gaita</h3>
		
		<p>
			Kopā spēlei ir 13 gājieni, pēc tam tiek skaitīti atminētie noslēpumainie vārdi un salīdzina punktus ar <b>kopējo rezultātu tabulu</b>.
		</p>
		
		<p>
			<b>Katrs gājiens ir sadalīts 4 fāzēs:</b>
			
			<ol>
				<li>Izvēlieties noslēpumaino vārdu</li>
				<li>Pavediena izdomāšana</li>
				<li>Pavedienu salīdzināšana</li>
				<li>Minēt</li>
			</ol>
		</p>

		<div class="d-flex flex-row">
			<div class="bg-triangle color-brown d-flex justify-content-center align-items-center">
				1
			</div>
			<h4>Izvēlieties noslēpumaino vārdu</h4>
		</div>

		<p>
			Aktīvais spēlētājs izvēlas vienu no pieciem noslēpumainajiem vārdiem, kuram pārējie spēlētāji rakstīs pavedienus.
		</p>

		<div class="d-flex flex-row">
			<div class="bg-triangle color-brown d-flex justify-content-center align-items-center">
				2
			</div>
			<h4>Pavediena izdomāšana</h4>
		</div>

		<p>
			Bez sarunāšanās katrs no spēlētājiem domā pavedienu, bet var rakstīt <i>Tikai Vienu vārdu</i>.
		</p>
		
		<p>
			<b>Piezīme:</b> cipars, skaitlis, akronīms, onomatopoēze vai īpaša rakstzīme tiek uzskatīti par vārdiem.
		</p>
		
		<p>
			<i>Piemērs:</i> <i>007</i> ir atļauts kādam palīdzēt uzminēt <i>Bondu</i>,
			tāpat kā <i>Riiiiiiinnng</i> vai <i>SMS</i> ir atļauts palīdzēt kādam uzminēt <i>Telefonu</i>,
			un <i>$</i> ir atļauts palīdzēt kādam uzminēt <i>Ameriku</i>.
		</p>
		
		<h4>Nederīgie vārdi</h4>
		
		<ul class="color-brown">
			<li>Noslēpumainais vārds, bet ir rakstīts savādāk. <i>Piemērs:</i> Auksts un Augsts</li>
			<li>Noslēpumainais vārds rakstīts svešvalodā. <i>Piemērs:</i> Pipars un Pepper</li>
			<li>Izdomāts vārds. <i>Piemērs:</i> Ekipējums un Epikējums</li>
			<li>Vienāda sakne. <i>Piemērs:</i> Kalns un Pakalniņš</li>
		</ul>

		<div class="d-flex flex-row">
			<div class="bg-triangle color-brown d-flex justify-content-center align-items-center">
				3
			</div>
			<h4>Pavedienu salīdzināšana</h4>
		</div>

		<p>
			Tad, kad visi spēlētāji ir izdomājuši un uzrakstījuši savus pavedienus,
			tad spēles vadītājs izņem līdzīgos un nederīgos vārdus, jo pavediens var būt <i>Tikai Viens</i> arī starp uzrakstītajiem vārdiem. 
		</p>
		
		<h4>Vienādie vārdi:</h4>
		
		<p>
			Divi identiski vārdi. <i>Piemērs:</i> Punkts un Punkts.
		</p>
		
		<p>
			Vienāda sakne. <i>Piemērs:</i> Kalns un Pakalniņš.
		</p>
		
		<p>
			Daudzskaitlis, dzimuma atšķirība, rakstīšanas kļūdas neskaitās kā tiešas dažādības. <i>Piemērs:</i> Princis un Princese. Aktieris un Aktrise. Tomāts un Toamāts.
		</p>
		
		<p>
			<b>Piezīme:</b> Ja visi vārdi ir tikuši izņemti, tad šis gājiens tiek skaitīts kā pabeigts un neieskaitīts. Spēli sāk jauns aktīvais spēlētājs.
		</p>

		<div class="d-flex flex-row">
			<div class="bg-triangle color-brown d-flex justify-content-center align-items-center">
				4
			</div>
			<h4>Minēt</h4>
		</div>

		<p>
			Tiklīdz vadītājs ir izņēmis visus līdzīgos un nederīgos pavedienus, tad aktīvais spēlētājs sāk minēt vārdu ar atlikušo pavedienu palīdzību.
		</p>
		
		<p>
			Ja aktīvais spēlētājs nezin vārdu, tad var izlaist gājienu.
		</p>
		
		<p>
			Aktīvais spēlētājs var minēt <i>Tikai Vienu vārdu</i>.
		</p>
		
		<router-link :to="{name: 'login'}">
			<button class="btn btn-outline-danger btn-lg">
				Sākt spēli
			</button>
		</router-link>
	</div>
</template>

<script>
	export default {};
</script>