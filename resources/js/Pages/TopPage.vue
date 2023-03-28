<script setup>
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import i_Animal from "@/Components/Icon/Animal.vue";
import Card from "@/Components/Common/Card.vue";
import Prefectures from "@/Components/Parts/Prefectures.vue";
import AnimalCategories from "@/Components/Parts/AnimalCategories.vue";
import Modal from "@/Components/Modal.vue";

defineProps({
	hospitals: Object,
	prefectures: Array,
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
	<Head title="Topページ" />
	<Modal :show="contentModal" @close="closeModal">
		<Prefectures :prefectures="prefectures" @hospitalCheck="hospitalCheck" />
	</Modal>
	<Modal :show="contentModalAnimal" @close="closeModalAnimal">
		<AnimalCategories :animalCategories="animalCategories" @animalCheck="animalCheck" />
	</Modal>
	<LayoutBase>
		<template #contents>
			<section class="fs bgg h-[603px] pt-32 lg:pt-16">
				<h1 class="text-center text-white text-lg font-semibold">
					動物の暮らしをHAPPYにする動物メディア検索サイト
				</h1>
				<figure class="mt-14">
					<i_Animal class="mx" />
				</figure>
			</section>
			<section class="search-basic">
				<div class="l-container w1000">
					<TabBasic @openModal="openModal" @openModalAnimal="openModalAnimal" :PrefecturesData="PrefecturesData" :AnimalsData="AnimalsData" />
				</div>
			</section>
			<section class="pickup mt-16">
				<div class="l-container">
					<div class="c-title">
						<h2><i_Doubutu />ピックアップ</h2>
						<p class="mt-2">今注目の特集やイベント情報</p>
					</div>
					<div
						class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 lg:gap-6 mt-6"
					>
						<template v-for="i in 3">
							<Card />
						</template>
					</div>
				</div>
			</section>
			<section class="useful mt-16">
				<div class="l-container">
					<div class="c-title">
						<h2><i_Doubutu />お役立ちコンテンツ（仮）</h2>
						<p class="mt-2">ここにサブタイトルが入ります</p>
					</div>
					<div
						class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mt-6"
					>
						<template v-for="i in 4">
							<Card />
						</template>
						<Link :href="route('HospitalSearch')"> 一覧見る </Link>
					</div>
				</div>
			</section>
			<section class="useful mt-16">
				<div class="l-container">
					<div class="c-title">
						<h2><i_Doubutu />最近オープンしたお店（仮）</h2>
						<p class="mt-2">ここにサブタイトルが入ります</p>
					</div>
					<div
						class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mt-6"
					>
						<template v-for="i in 4">
							<Card />
						</template>
						<Link :href="route('HospitalSearch')"> 一覧見る </Link>
						{{ hospitals }}
					</div>
				</div>
			</section>
		</template>
	</LayoutBase>
</template>
