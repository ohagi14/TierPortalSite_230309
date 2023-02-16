<script setup>
defineProps({
	prefs: Array,
});

</script>
<template>
	<ul class="pl-10" v-for="(pref, i) in prefs" v-bind:key="pref.id">
		<li>{{ pref.name }}</li>
		<ul class="cities pl-4">
			<template v-for="(cities, n) in prefs[i].cities" v-bind:key="cities.id">
				<li v-if="cities.words">
					{{ cities.name }}
					<template
						v-for="words in prefs[i].cities[n].words"
						v-bind:key="words.id"
					>
						<li class="pl-4">
							{{ words.name }}
						</li>
					</template>
				</li>
				<li v-else>{{ cities.name }}</li>
			</template>
		</ul>
	</ul>
</template>
