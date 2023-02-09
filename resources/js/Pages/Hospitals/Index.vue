<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import FlashMessage from "@/Components/FlashMessage.vue";
import Pagination from "@/Components/Pagination.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
	hospitals: Object,
});
</script>

<template>
	<Head title="動物病院一覧" />

	<AuthenticatedLayout>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				動物病院一覧
			</h2>
		</template>
		<FlashMessage />

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<section class="text-gray-600 body-font">
						<div class="container px-5 py-8 mx-auto">
							<div class="flex pl-4 my-4 lg:w-2/3 w-full mx-auto">
								<Link
									as="button"
									:href="route('hospitals.create')"
									class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
								>
									新規作成
								</Link>
							</div>
							<div class="lg:w-2/3 mt-4 w-full mx-auto overflow-auto">
								<table class="table-auto w-full text-left whitespace-no-wrap">
									<thead>
										<tr>
											<th
												class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl"
											>
												ID
											</th>
											<th
												class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
											>
												タイトル
											</th>
											<th
												class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
											>
												No.
											</th>
											<th
												class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
											>
												状態
											</th>
										</tr>
									</thead>
									<tbody>
										<tr v-for="hospital in hospitals.data" :key="hospital.id">
											<td class="px-4 py-3">
												<Link
													class="text-blue-400"
													:href="
														route('hospitals.show', { hospital: hospital.id })
													"
												>
													{{ hospital.id }}
												</Link>
											</td>
											<td class="px-4 py-3">
												{{ hospital.title }}
											</td>
											<td class="px-4 py-3">
												{{ hospital.sample_num }}
											</td>
											<td class="px-4 py-3">
												<span v-if="hospital.is_selling === 1">公開中</span>
												<span v-if="hospital.is_selling === 0">非公開</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<Pagination class="mt-6" :links="hospitals.links"></Pagination>
						</div>
					</section>
				</div>
			</div>
		</div>
	</AuthenticatedLayout>
</template>
