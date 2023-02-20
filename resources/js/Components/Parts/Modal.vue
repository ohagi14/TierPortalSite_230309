<script setup>
import { ref } from "vue";

const showContent = ref(false);

const openModal = () => {
	console.log("click");
	showContent.value = true;
};

const closeModal = () => {
	showContent.value = false;
};

</script>

<template>
	<button @click="openModal">Click</button>

	<div class="modal" v-if="showContent">
		<div class="container">
			<p>モーダル表示</p>
			<button @click="closeModal">Close</button>
		</div>
	</div>
</template>
