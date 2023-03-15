<script setup>
import { router } from "@inertiajs/vue3";
import { ref } from "vue";

import i_Search from "@/Components/Icon/Search.vue";
import i_Japan from "@/Components/Icon/Japan.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import i_Others from "@/Components/Icon/Others.vue";
import i_Plus from "@/Components/Icon/Plus.vue";
import i_Hospital from "@/Components/Icon/Hospital.vue";

import iD_En from "@/Components/Icon/En.vue";

import Modal from "@/Components/Modal.vue";
import Prefectures from "@/Components/Parts/Prefectures.vue";

defineProps({
	PrefecturesData: Array,
});

const hospitalSearch = ref("");
const hospitalPre = ref([]);
const searchHospitals = () => {
	// ショートハンド[条件 ? 処理 : 処理 ;] (AAA > BBB) ? CCC = true : DDD = true;
	hospitalSearch.value || PrefecturesData.length !== 0
		? router.get(
				route("HospitalSearch", {
					s: hospitalSearch.value,
					p: PrefecturesData,
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
	<div class="tab mt-[-225px]">
		<ul class="tab-list">
			<li class="active font-semibold">
				<i_Hospital class="mx mb-1" />
				動物病院
			</li>
			<li><iD_En class="mx mb-1.5" />トリミングサロン</li>
			<li><iD_En class="mx mb-1.5" />ペットホテル</li>
			<li><iD_En class="mx mb-1.5" />飲食店</li>
		</ul>
		<div class="tab-content">
			<div class="f-search i-input">
				<input
					type="search"
					placeholder="病院名や駅名などを入力してください"
					name="hospitalSearch"
					v-model="hospitalSearch"
				/>
				<i_Search />
			</div>
			<div class="flex gap-x-6 mt-8">
				<div @click="clickModal" class="w-full f-japan i-input i-plus">
					<input
						class="cursor-pointer"
						type="text"
						placeholder="都道府県"
						name="hospitalPre"
						disabled
						:value="PrefecturesData"
					/>
					<i_Japan />
					<i_Plus />
				</div>
				<div class="w-full f-doubutu i-input i-plus">
					<input type="text" placeholder="診療対象動物" />
					<i_Doubutu />
					<i_Plus />
				</div>
				<div class="w-full f-others i-input i-plus">
					<input type="text" placeholder="その他条件" />
					<i_Others />
					<i_Plus />
				</div>
			</div>
			<button
				class="btn shadow-md flex items-center justify-center bg-main text-white mt-8 w-[336px] h-16 mx-auto gap-x-2 font-semibold"
				@click="searchHospitals"
			>
				<i_Search color="#fff" />
				検索する
			</button>
		</div>
	</div>
</template>
