<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import Pagination from "@/Components/Pagination.vue";

import Search from "@/Components/Parts/Search.vue";

import Prefectures from "@/Components/Parts/Prefectures.vue";
import Modal from "@/Components/Modal.vue";

defineProps({
	prefectures: Array,
	hospitals: Object,
});
const contentModal = ref(false);
const openModal = () => {
	contentModal.value = true;
};
const closeModal = () => {
	contentModal.value = false;
};
const PrefecturesData = ref();
const hospitalCheck = (data) => {
	PrefecturesData.value = data.checkValue.value;
};
</script>
<template>
	<Head title="一覧ページ" />
	<Modal :show="contentModal" @close="closeModal">
		<Prefectures :prefectures="prefectures" @hospitalCheck="hospitalCheck" />
	</Modal>
	<LayoutBase>
		<Header />
		<template #contents>
			<Search @openModal="openModal" :PrefecturesData="PrefecturesData" />
			<section class="search-basic">
				<div class="l-container">
					<table class="table-auto w-full text-left whitespace-no-wrap">
						<thead>
							<tr>
								<th
									class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"
								>
									ID
								</th>
								<th
									class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
								>
									タイトル
								</th>
								<th
									class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
								>
									都道府県
								</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="hospital in hospitals.data" :key="hospital.id">
								<td class="px-4 py-3">
									<Link
										class="text-blue-400"
										:href="route('hospitals.show', { hospital: hospital.id })"
									>
										{{ hospital.id }}
									</Link>
								</td>
								<td class="px-4 py-3">
									{{ hospital.title }}
								</td>
								<td class="px-4 py-3">
									{{ hospital.prefecture }}
								</td>
							</tr>
						</tbody>
					</table>
					<Pagination class="mt-6" :links="hospitals.links"></Pagination>
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
