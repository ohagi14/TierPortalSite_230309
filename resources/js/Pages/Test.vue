<script setup>
import { router } from "@inertiajs/vue3";
import { ref, computed } from "vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import Modal from "@/Components/Modal.vue";
import Prefectures from "@/Components/Parts/Prefectures.vue";
const props = defineProps({
	prefectures: Array,
});

/* 都道府県ジャンル分け表示対応
/都道府県- タブ切り替え
/　市区町村- チェックボックス
*/
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
	<div class="l-container">
		<div class="flex">
			<div class="overflow-x-scroll h-80 w-36">
				<ul>
					<li
						class="cursor-pointer py-2 px-4 hover:bg-blue-100"
						v-for="prefecture in prefectures"
						:key="prefecture.id"
						@click="clickPref(prefecture.en)"
					>
						{{ prefecture.id + ":" + prefecture.name }}
					</li>
				</ul>
			</div>
			<div class="overflow-x-scroll h-80 w-[calc(100%-144px)]">
				<ul v-for="prefecture in prefectures" :data-tabEn="prefecture.en">
					<template v-for="cities in prefecture.cities" v-bind:key="cities.id">
						<template v-if="cities.words && cities.words.length > 0">
							<li>
								<span>{{ cities.title }}</span>
								<ul>
									<li v-for="ward in cities.words" :key="ward">
										{{ cities.name + ward.name }}
									</li>
								</ul>
							</li>
							<li><span>{{ prefecture.title }}</span></li>
						</template>
						<template v-else>
							<li>{{ cities.name }}</li>
						</template>
					</template>
				</ul>
			</div>
		</div>
	</div>
</template>
