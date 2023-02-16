<script setup>
defineProps({
	prefectures: Array,
});

</script>
<template>
	<ul>
		<li v-for="pref in prefectures" v-bind:key="pref.id">{{ pref.name }}</li>
	</ul>
	<ul class="pl-10" v-for="(pref, i) in prefectures" v-bind:key="pref.id">
		<li>{{ pref.name }}</li>
		<ul class="cities pl-4">
			<template v-for="(cities, n) in prefectures[i].cities" v-bind:key="cities.id">
				<li v-if="cities.words">
					{{ cities.name }}
					<template
						v-for="words in prefectures[i].cities[n].words"
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
