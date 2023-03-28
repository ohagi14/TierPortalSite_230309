<script setup>
import { ref } from "vue";

defineProps({
	hospitals: Array,
});
</script>
<template>
	<aside class="prefectures">
		<h2 class="text-2xl font-bold">診療対象動物を選択してください。</h2>
		<div class="wrap">
		</div>
	</aside>
</template>
