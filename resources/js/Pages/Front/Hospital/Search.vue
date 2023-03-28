<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import Pagination from "@/Components/Pagination.vue";

import Search from "@/Components/Parts/Search.vue";
import Media from "@/Components/Common/Media.vue";

import Prefectures from "@/Components/Parts/Prefectures.vue";
import AnimalCategories from "@/Components/Parts/AnimalCategories.vue";
import Modal from "@/Components/Modal.vue";

defineProps({
	prefectures: Array,
	hospitals: Object,
	animalCategories: Array,
});
//都道府県用
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
//動物用
const contentModalAnimal = ref(false);
const openModalAnimal = () => {
	contentModalAnimal.value = true;
};
const closeModalAnimal = () => {
	contentModalAnimal.value = false;
};
const AnimalsData = ref();
const animalCheck = (data) => {
	AnimalsData.value = data.checkValueAnimal.value;
};
</script>
<template>
	<Head title="一覧ページ" />
	<Modal :show="contentModal" @close="closeModal">
		<Prefectures :prefectures="prefectures" @hospitalCheck="hospitalCheck" />
	</Modal>
	<Modal :show="contentModalAnimal" @close="closeModalAnimal">
		<AnimalCategories :animalCategories="animalCategories" @animalCheck="animalCheck" />
	</Modal>
	<LayoutBase>
		<Header />
		<template #contents>
			<Search @openModal="openModal" @openModalAnimal="openModalAnimal" :PrefecturesData="PrefecturesData" :AnimalsData="AnimalsData" />
			<section class="search-basic">
				<div class="l-container">
					<div class="search-header flex justify-between mt-12">
						<h2 class="text-3xl font-bold">動物病院の検索結果</h2>
						<p class="text-sm">
							検索結果<span class="text-main text-3xl font-bold">{{
								hospitals.total
							}}</span
							>件
						</p>
					</div>
					<Media :hospitals="hospitals" />
					<Pagination class="mt-6" :links="hospitals.links"></Pagination>
				</div>
			</section>
		</template>
	</LayoutBase>
</template>
