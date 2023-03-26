<script setup>
	import { Head, Link, router } from "@inertiajs/vue3";
	import { ref } from "vue";
	import Header from "@/Components/Common/Header.vue";
	import LayoutBase from "@/Components/Common/LayoutBase.vue";
	import Pagination from "@/Components/Pagination.vue";

	import Search from "@/Components/Parts/Search.vue";
	import Media from "@/Components/Common/Media.vue";


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
						<Media :hospitals="hospitals"/>
						<Pagination class="mt-6" :links="hospitals.links"></Pagination>
					</div>
				</section>
			</template>
		</LayoutBase>
	</template>
