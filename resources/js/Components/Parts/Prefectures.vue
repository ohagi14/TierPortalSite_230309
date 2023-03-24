<script setup>
import { ref } from "vue";

defineProps({
	prefectures: Array,
});
const checkValue = ref([]);
const emit = defineEmits(["hospitalCheck"]);
const onChangeHospitalPre = () => {
	emit("hospitalCheck", { checkValue });
};
const clickPref = (e) => {
	const targetTabEn = document.querySelectorAll("[data-tabEn]");
	for (let i = 0; i < targetTabEn.length; i++) {
		const tab = targetTabEn[i].dataset.taben;
		if (tab === e) {
			targetTabEn[i].style.display = "block";
		} else {
			targetTabEn[i].style.display = "none";
		}
	}
};
</script>
<template>
	<aside class="prefectures">
		<h2 class="text-2xl font-bold">エリアを選択</h2>
		<div class="wrap">
			<div class="prefectures-tab">
				<ul>
					<li
						class="font-semibold"
						v-for="prefecture in prefectures"
						:key="prefecture.id"
						@click="clickPref(prefecture.en)"
					>
						{{ prefecture.name }}
					</li>
				</ul>
			</div>
			<div class="prefectures-content">
				<template v-for="prefecture in prefectures" :key="prefecture.id">
					<ul :data-tabEn="prefecture.en" v-show="prefecture.id == '01'">
						<template v-for="cities in prefecture.cities" :key="cities.id">
							<template v-if="cities.words && cities.words.length > 0">
								<li>
									<p class="c-TabText80">{{ cities.title }}</p>
									<ul class="grid grid-cols-4 gap-5 my-5 text-sm">
										<li v-for="ward in cities.words" :key="ward">
											<input
												type="checkbox"
												:id="'ward-' + ward.id"
												:value="prefecture.name + ward.name"
												@change="onChangeHospitalPre"
												v-model="checkValue"
											/>
											<label :for="'ward-' + ward.id">{{
												cities.name + ward.name
											}}</label>
										</li>
									</ul>
								</li>
							</template>
							<template v-else>
								<li>
									<p class="c-TabText80">{{ prefecture.title }}</p>
								</li>
								<li>
									<input
										type="checkbox"
										:id="'cities-' + cities.id"
										:value="cities.name"
										@change="onChangeHospitalPre"
										v-model="checkValue"
									/>
									<label :for="'cities-' + cities.id">{{ cities.name }}</label>
								</li>
							</template>
						</template>
					</ul>
				</template>
				<!-- <template v-for="(pref, i) in prefectures" v-bind:key="pref.id">
					<template
						v-for="(cities, n) in prefectures[i].cities"
						v-bind:key="cities.id"
					>
						<template v-if="cities.words">
							<p class="c-TabText80">{{ pref.name + "ー" + cities.name }}</p>
							<ul class="grid grid-cols-4 gap-5 my-5 text-sm">
								<li>
									<input
										type="checkbox"
										:id="'cities-' + cities.id"
										:value="pref.name + cities.name"
										@change="onChangeHospitalPre"
										v-model="checkValue"
									/>
									<label :for="'cities-' + cities.id"
										>{{ cities.name }}全域</label
									>
								</li>
								<template
									v-for="words in prefectures[i].cities[n].words"
									v-bind:key="words.id"
								>
									<li>
										<input
											type="checkbox"
											:id="'words-' + words.id"
											:value="cities.name + words.name"
											@change="onChangeHospitalPre"
											v-model="checkValue"
										/>
										<label :for="'words-' + words.id">{{
											cities.name + words.name
										}}</label>
									</li>
								</template>
							</ul>
						</template>
						<template v-else>
							<p v-if="n === 1">{{ pref.name + "ー 市部" }}</p>
							<ul class="grid grid-cols-4 gap-5 my-5 text-sm">
								<li>
									<input
										type="checkbox"
										:id="'place-' + cities.id"
										:value="cities.name"
										@change="onChangeHospitalPre"
										v-model="checkValue"
									/>
									<label :for="'place-' + cities.id">{{ cities.name }}</label>
								</li>
							</ul>
						</template>
					</template>
				</template> -->
			</div>
		</div>
	</aside>
</template>
