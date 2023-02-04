<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, router, useForm } from "@inertiajs/vue3";
import { reactive } from "vue";

const props = defineProps({
	hospital: Object,
});

const form = reactive({
	id: props.hospital.id,
	title: props.hospital.title,
	sub_title: props.hospital.sub_title,
	contents: props.hospital.contents,
	sample_num: props.hospital.sample_num,
	is_selling: props.hospital.is_selling,
});

const updateHospital = (id) => {
	router.put(route("hospitals.update", { hospital: id }), form);
};
</script>

<template>
	<Head title="動物病院新規登録" />

	<AuthenticatedLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				動物病院編集
			</h2>
		</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<section class="text-gray-600 body-font relative">
						<form @submit.prevent="updateHospital(form.id)">
							<div class="container px-5 py-8 mx-auto">
								<div class="lg:w-1/2 md:w-2/3 mx-auto">
									<div class="flex flex-wrap -m-2">
										<div class="p-2 w-full">
											<div class="relative">
												<label
													for="title"
													class="leading-7 text-sm text-gray-600"
													>タイトル
												</label>
												<input
													type="text"
													id="title"
													name="title"
													v-model="form.title"
													class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
												/>
											</div>
										</div>
										<div class="p-2 w-full">
											<div class="relative">
												<label
													for="sub_title"
													class="leading-7 text-sm text-gray-600"
													>サブタイトル
												</label>
												<input
													type="text"
													id="sub_title"
													name="sub_title"
													v-model="form.sub_title"
													class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
												/>
											</div>
										</div>
										<div class="p-2 w-full">
											<div class="relative">
												<label
													for="contents"
													class="leading-7 text-sm text-gray-600"
													>内容</label
												>
												<textarea
													id="contents"
													name="contents"
													v-model="form.contents"
													class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
												></textarea>
											</div>
										</div>
										<div class="p-2 w-full">
											<div class="relative">
												<label
													for="sample_num"
													class="leading-7 text-sm text-gray-600"
													>サンプル数字</label
												>
												<input
													type="number"
													id="sample_num"
													name="sample_num"
													v-model="form.sample_num"
													class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
												/>
											</div>
										</div>
										<div class="p-2 w-full">
											<div class="relative">
												<p class="mb-1">ステータス</p>
												<label
													for="is_selling-1"
													class="text-sm text-gray-600 mr-1"
													>公開</label
												>
												<input
													type="radio"
													id="is_selling-1"
													name="is_selling"
													v-model="form.is_selling"
													value="1"
												/>
												<label
													for="is_selling-2"
													class="text-sm text-gray-600 mr-1 ml-4"
													>非公開</label
												>
												<input
													type="radio"
													id="is_selling-2"
													name="is_selling"
													v-model="form.is_selling"
													value="0"
												/>
											</div>
										</div>
										<div class="p-2 w-full">
											<button
												class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
											>
												更新する
											</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</section>
				</div>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
