<script setup>
import { ref } from "vue";

defineProps({
	animalCategories: Array,
});
const checkValueAnimal = ref([]);
const emit = defineEmits(["animalCheck"]);
const onChangeAnimal = () => {
	emit("animalCheck", { checkValueAnimal });
};
</script>
<template>
	<aside class="prefectures">
		<h2 class="text-2xl font-bold">診療対象動物を選択してください。</h2>
		<div class="wrap">
			<ul class="flex flex-wrap gap-5 my-5 text-sm p-6">
				<li v-for="animal in animalCategories" :key="animal">
					<input
						type="checkbox"
						:id="'animal-' + animal.id"
						:value="animal.name"
						@change="onChangeAnimal"
						v-model="checkValueAnimal"
					/>
					<label class="ml-2" :for="'animal-' + animal.id">{{ animal.name }}</label>
				</li>
			</ul>
		</div>
	</aside>
</template>
