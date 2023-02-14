<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Header.vue";
import LayoutBase from "@/Components/Layouts/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";

defineProps({
	hospitals: Object,
});
const search = ref("");

const searchHospitals = () => {
	Inertia.get(route("hospital", { search: search.value }));
};
</script>
<template>
	<Head title="Topページ" />
	<LayoutBase>
		<Header />
		<template #contents>
			<section class="fs bgg pt-16"></section>
			<section class="search-basic">
				<div class="container">
					<input type="text" name="search" v-model="search" />
					<button class="bg-blue-300 text-white p-2" @click="searchHospitals">
						検索
					</button>
					<!-- <TabBasic /> -->
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
