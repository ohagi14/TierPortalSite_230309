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
						v-for="pref in prefectures"
						:key="pref.id"
						@click="clickPref(pref.en)"
					>
						{{ pref.id + ":" + pref.name }}
					</li>
				</ul>
			</div>
			<div class="overflow-x-scroll h-80 w-[calc(100%-144px)]">
				<ul
					v-for="(pref, i) in prefectures"
					:data-tabEn="pref.en"
				>
					<li>
						{{ pref.id + ":" + pref.name }}
					</li>
				</ul>
			</div>
		</div>
	</div>
</template>
