<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FlashMessage from "@/Components/FlashMessage.vue";
import Pagination from "@/Components/Pagination.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
	hospitals: Object,
});
</script>

<template>
	<ul v-for="hospital in hospitals.data" :key="hospital.id">
		<li>{{ hospital.id }}</li>
		<li>{{ hospital.title }}</li>
	</ul>
	<Pagination class="mt-6" :links="hospitals.links"></Pagination>
</template>
