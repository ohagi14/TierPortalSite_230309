<script setup>
import { router } from "@inertiajs/vue3";
import { ref } from "vue";

import i_Search from "@/Components/Icon/Search.vue";
import i_Japan from "@/Components/Icon/Japan.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import i_Others from "@/Components/Icon/Others.vue";
import i_Plus from "@/Components/Icon/Plus.vue";

// 一度変数にsetupする必要あり！
const props = defineProps({
	PrefecturesData: Array,
});
const hospitalSearch = ref();
const searchHospitals = () => {
	// ショートハンド[条件 ? 処理 : 処理 ;] (AAA > BBB) ? CCC = true : DDD = true;
	hospitalSearch.value || props.PrefecturesData
		? router.get(
				route("HospitalSearch", {
					s: hospitalSearch.value,
					p: props.PrefecturesData,
				})
		  )
		: router.get(route("HospitalSearch"));
};
//都道府県モーダル
// > thisなどでクリック対象変更
const emit = defineEmits(["openModal"]);
const clickModal = () => emit("openModal");
</script>
<template>
	<section class="mt-16 py-16 bg-blueD8">
		<div class="l-container">
			<div class="flex gap-2">
				<div class="f-search i-input bg-white col-span-2 max-w-[320px]">
					<input
						type="search"
						placeholder="病院名や駅名などを入力してください"
						name="search"
						v-model="search"
					/>
					<i_Search />
				</div>
				<div
					@click="clickModal"
					class="w-full f-japan i-input bg-white i-plus max-w-[210px]"
				>
					<input
						type="text"
						class="cursor-pointer"
						placeholder="都道府県"
						:value="PrefecturesData"
						disabled
					/>
					<i_Japan />
					<i_Plus />
				</div>
				<div class="w-full f-doubutu i-input bg-white i-plus max-w-[210px]">
					<input type="text" placeholder="診療対象動物" />
					<i_Doubutu />
					<i_Plus />
				</div>
				<div class="w-full f-others i-input bg-white i-plus max-w-[210px]">
					<input type="text" placeholder="その他条件" />
					<i_Others />
					<i_Plus />
				</div>
				<button
					class="bg-main text-white p-2 w-full max-w-[184px]"
					@click="searchHospitals"
				>
					<i_Search color="#fff" />
					検索する
				</button>
			</div>
		</div>
	</section>
</template>
