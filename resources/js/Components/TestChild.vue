<script setup>
import { ref } from "vue";

defineProps(["modelValue"]);
defineEmits(["update:modelValue"]);
</script>

<template>
	<label class="db"
		>サンプル1<input
			type="checkbox"
			value="サンプル1"
			@change="$emit('update:modelValue', $event.target.value)"
	/></label>
	<label class="db"
		>サンプル2<input
			type="checkbox"
			value="サンプル2"
			@change="$emit('update:modelValue', $event.target.value)"
	/></label>
</template>
