<script setup>
defineProps({
	prefectures: Array,
});
</script>
<template>
	<aside class="prefectures">
		<div class="wrap">
			<div class="prefectures-tab">
				<ul>
					<li v-for="pref in prefectures" v-bind:key="pref.id">
						{{ pref.name }}
					</li>
				</ul>
			</div>
			<div class="prefectures-content">
				<template v-for="(pref, i) in prefectures" v-bind:key="pref.id">
						<template
							v-for="(cities, n) in prefectures[i].cities"
							v-bind:key="cities.id"
						>
							<template v-if="cities.words">
								<p>{{ pref.name + "ー" + cities.name }}</p>
								<ul class="grid grid-cols-4 gap-5 my-5">
									<li>
										<input type="checkbox" :id="'cities-' + cities.id" />
										<label :for="'cities-' + cities.id"
											>{{ cities.name }}全域</label
										>
									</li>
									<template
										v-for="words in prefectures[i].cities[n].words"
										v-bind:key="words.id"
									>
										<li>
											<input type="checkbox" :id="'words-' + words.id" />
											<label :for="'words-' + words.id">{{
												cities.name + words.name
											}}</label>
										</li>
									</template>
								</ul>
							</template>
							<template v-else>
								<!-- <p v-if="n === 1">{{ pref.name + "ー 市部" }}</p> -->
								<ul>
									<li>
										<input type="checkbox" :id="'place-' + cities.id" />
										<label :for="'place-' + cities.id">{{ cities.name }}</label>
									</li>
								</ul>
							</template>
						</template>
				</template>
			</div>
		</div>
	</aside>
</template>
