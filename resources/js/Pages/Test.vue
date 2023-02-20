<script setup>
import { ref } from "vue";

const props = defineProps({
	show: {
		type: Boolean,
		default: false,
	},
	close: {
		type: Boolean,
		default: true,
	},
});


</script>

<template>
	<teleport to="body">
		<transition leave-active-class="duration-200">

		</transition>
	</teleport>
</template>
