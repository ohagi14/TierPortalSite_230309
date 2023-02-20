<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import Pagination from "@/Components/Pagination.vue";

import i_Search from "@/Components/Icon/Search.vue";
import i_Japan from "@/Components/Icon/Japan.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import i_Others from "@/Components/Icon/Others.vue";
import i_Plus from "@/Components/Icon/Plus.vue";

defineProps({
	hospitals: Object,
});

const search = ref("");
const pre = ref("");
const searchHospitals = () => {
	router.get(route("HospitalSearch", { s: search.value, p: pre.value }));
};
</script>
<template>
	<Head title="Topページ" />
	<LayoutBase>
		<Header />
		<template #contents>
			<section class="mt-16 py-16 bg-blueD8">
				<div class="l-container">
					<div class="flex gap-2">
						<div class="f-search i-input bg-white col-span-2 max-w-[320px]">
							<input
								type="search"
								placeholder="病院名や駅名などを入力してください"
								name="search"
								v-model="search"
							/>
							<i_Search />
						</div>
						<div class="w-full f-japan i-input bg-white i-plus max-w-[210px]">
							<input
								type="text"
								placeholder="都道府県"
								name="pre"
								v-model="pre"
							/>
							<i_Japan />
							<i_Plus />
						</div>
						<div class="w-full f-doubutu i-input bg-white i-plus max-w-[210px]">
							<input type="text" placeholder="診療対象動物" />
							<i_Doubutu />
							<i_Plus />
						</div>
						<div class="w-full f-others i-input bg-white i-plus max-w-[210px]">
							<input type="text" placeholder="その他条件" />
							<i_Others />
							<i_Plus />
						</div>
						<button
							class="bg-main text-white p-2 w-full max-w-[184px]"
							@click="searchHospitals"
						>
							<i_Search color="#fff" />
							検索する
						</button>
					</div>
				</div>
			</section>

			<section class="search-basic">
				<div class="l-container">
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
										:href="route('hospitals.show', { hospital: hospital.id })"
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
					<Pagination class="mt-6" :links="hospitals.links"></Pagination>
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
