<script setup>
import { ref } from "vue";
import TestChild from "@/Components/TestChild.vue";

const md = ref([]);

</script>
<template>
	<input type="text" disabled :value="md" />
	<TestChild v-model="md" />
</template>
