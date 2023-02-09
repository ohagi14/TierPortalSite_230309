<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/components/layouts/LayoutBase.vue";
</script>
<template>
	<Head title="Topページ" />
	<LayoutBase>
		<template #header>
			<h1 class="c-sub">header</h1>
		</template>
		<template #heading>
			<h3>heading</h3>
		</template>
		<template #contents>
			<h3>contents</h3>
		</template>
		<template #footer>
			<h3>footer</h3>
		</template>
	</LayoutBase>
</template>
