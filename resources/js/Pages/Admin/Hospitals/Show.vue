<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, router } from "@inertiajs/vue3";
import { nl2br } from "@/common";

defineProps({
	hospital: Object,
});
const deleteHospital = (id) => {
	router.delete(route("hospitals.destroy", { hospital: id }), {
		onBefore: () => confirm("本当に削除しますか？"),
	});
};
</script>

<template>
	<Head title="動物病院詳細" />

	<AuthenticatedLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				動物病院詳細
			</h2>
		</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<section class="text-gray-600 body-font relative">
						<div class="container px-5 py-8 mx-auto">
							<div class="lg:w-1/2 md:w-2/3 mx-auto">
								<div class="flex flex-wrap -m-2">
									<div class="p-2 w-full">
										<div class="relative">
											<label for="title" class="leading-7 text-sm text-gray-600"
												>タイトル</label
											>
											<div
												class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.title }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label
												for="sub_title"
												class="leading-7 text-sm text-gray-600"
												>サブタイトル</label
											>
											<div
												class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.sub_title }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label
												for="contents"
												class="leading-7 text-sm text-gray-600"
												>内容</label
											>
											<div
												v-if="hospital.contents !== null"
												class="overflow-y-auto w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
												v-html="nl2br(hospital.contents)"
											></div>
											<div
												v-if="hospital.contents === null"
												class="overflow-y-auto w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.contents }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label
												for="prefecture"
												class="leading-7 text-sm text-gray-600"
												>都道府県</label
											>
											<div
												class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.prefecture }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label
												for="train"
												class="leading-7 text-sm text-gray-600"
												>電車</label
											>
											<div
												v-if="hospital.train !== null"
												class="overflow-y-auto w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
												v-html="nl2br(hospital.train)"
											></div>
											<div
												v-if="hospital.train === null"
												class="overflow-y-auto w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.train }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label
												for="animal_category"
												class="leading-7 text-sm text-gray-600"
												>動物分類</label
											>
											<div
												class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
											>
												{{ hospital.animal_category }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full flex justify-center gap-x-8">
										<Link
											as="button"
											:href="
												route('hospitals.edit', {
													hospital: hospital.id,
												})
											"
											class="flex text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
										>
											編集
										</Link>
										<button
											@click="deleteHospital(hospital.id)"
											class="flex text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"
										>
											削除
										</button>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
