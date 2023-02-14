<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";

const search = ref("");
const searchHospitals = () => {
	route.post(route("HospitalSearch", { s: search.value }));
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
					<form @submit.prevent="searchHospitals">
						<input type="text" name="search" v-model="search" />
						<button class="bg-blue-300 text-white p-2">
							検索
						</button>
					</form>
					<!-- <TabBasic /> -->
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
