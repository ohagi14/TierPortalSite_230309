<script setup>
import { router } from "@inertiajs/vue3";
import { ref, computed } from "vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import Modal from "@/Components/Modal.vue";
import Prefectures from "@/Components/Parts/Prefectures.vue";

const hospitalSearch = ref("");
const hospitalPre = ref([]);


const searchHospitals = () => {
	// ショートハンド[条件 ? 処理 : 処理 ;] (AAA > BBB) ? CCC = true : DDD = true;
	console.log(hospitalPre.value);
	hospitalSearch.value || hospitalPre.value.length !== 0
		? router.get(
				route("HospitalSearch", {
					s: hospitalSearch.value,
					p: hospitalPre.value,
				})
		  )
		: router.get(route("HospitalSearch"));
};
//都道府県モーダル
const contentModal = ref(false);
const openModal = () => {
	contentModal.value = true;
};
const closeModal = () => {
	contentModal.value = false;
};
defineProps({
	prefectures: Array,
});
</script>

<template>
	<Modal :show="contentModal" maxWidth="l-container" @close="closeModal">
		<Prefectures :prefectures="prefectures" />
	</Modal>
	<LayoutBase>
		<template #contents>
			<div class="l-container mt-16">
				<div class="f-search i-input">
					<input
						type="search"
						placeholder="病院名や駅名などを入力してください"
						name="hospitalSearch"
						v-model="hospitalSearch"
					/>
				</div>
				<div class="flex gap-x-6 mt-8">
					<div @click="openModal" class="w-full f-japan i-input i-plus">
						<input
							class="cursor-pointer"
							type="text"
							placeholder="都道府県"
							name="hospitalPre"
							disabled
							:value="hospitalPre"
						/>
					</div>
				</div>
				<button
					class="btn shadow-md flex items-center justify-center bg-main text-white mt-8 w-[336px] h-16 mx-auto gap-x-2 font-semibold"
					@click="searchHospitals"
				>
					検索する
				</button>
				<label
					>札幌市：<input type="checkbox" value="札幌市" v-model="hospitalPre"
				/></label>
				<label
					>函館市<input type="checkbox" value="函館市" v-model="hospitalPre"
				/></label>
			</div>
		</template>
	</LayoutBase>
</template>
