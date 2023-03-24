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
						<li>
							<template v-for="cities in prefecture.cities" :key="cities.id">
								<template v-if="cities.words && cities.words.length > 0">
									<p v-if="cities.title" class="c-TabText80">
										{{ cities.title }}
									</p>
									<ul class="grid grid-cols-4 gap-5 my-5 text-sm">
										<li v-for="ward in cities.words" :key="ward">
											<input
												type="checkbox"
												:id="'ward-' + ward.id"
												:value="cities.name + ward.name"
												@change="onChangeHospitalPre"
												v-model="checkValue"
											/>
											<label :for="'ward-' + ward.id">{{
												cities.name + ward.name
											}}</label>
										</li>
									</ul>
								</template>
							</template>
							<template
								v-if="prefecture.cities && prefecture.cities.length > 0"
							>
								<p class="c-TabText80">
									{{ prefecture.title }}
								</p>
								<ul class="grid grid-cols-4 gap-5 my-5 text-sm">
									<template
										v-for="(cities, i) in prefecture.cities"
										:key="cities.id"
									>
										<template v-if="!cities.words">
											<li>
												<input
													type="checkbox"
													:id="'cities-' + cities.id"
													:value="cities.name"
													@change="onChangeHospitalPre"
													v-model="checkValue"
												/>
												<label :for="'cities-' + cities.id">{{
													cities.name
												}}</label>
											</li>
										</template>
									</template>
								</ul>
							</template>
						</li>
					</ul>
				</template>
			</div>
		</div>
	</aside>
</template>
