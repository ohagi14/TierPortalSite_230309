<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";

defineProps({
	hospital: Object,
});
</script>
<template>
	<Head title="投稿ページ" />
	<LayoutBase>
		<Header />
		<template #contents>
			<section class="fs bgg pt-16">
				{{ hospital }}
			</section>
		</template>
	</LayoutBase>
</template>
