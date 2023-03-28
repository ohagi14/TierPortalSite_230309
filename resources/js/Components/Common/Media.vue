<script setup>
import { Link } from "@inertiajs/vue3";

import { nl2br } from "@/common";

import i_Map from "@/Components/Icon/Map.vue";
import i_Train from "@/Components/Icon/Train.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";


defineProps({
	hospitals: Object,
});
</script>
<template>
	<article
		class="media border border-[#707070] mt-8"
		v-for="hospital in hospitals.data"
		:key="hospital.id"
	>
		<a href="./1" target="_blank" class="media-wrap flex p-6">
			<div class="media-left">
				<figure>
					<img
						class="w-full"
						loading="lazy"
						src="https://placehold.jp/300x200.png"
					/>
				</figure>
				<div class="media-info flex justify-between text-center mt-2">
					<div class="w-[142px] py-3 border">
						<a href="#" target="_blank" rel="noopener noreferrer">公式サイト</a>
					</div>
					<div class="w-[142px] py-3 border border-main">
						<a href="#" target="_blank" rel="noopener noreferrer"
							>電話をかける</a
						>
					</div>
				</div>
			</div>
			<div class="media-right ml-auto w-[calc(100%-300px-32px)]">
				<h3>タイトル：{{ hospital.title }}</h3>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Map class="w-full" /></div>{{ hospital.prefecture }}</p>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Train class="w-full" /></div><span v-html="nl2br(hospital.train)"></span></p>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Doubutu class="w-full" /></div>{{ hospital.animal_category }}</p>
				<table class="border-collapse border border-slate-500 w-full text-center mt-3">
					<thead class="bg-slate-200">
						<tr>
							<th class="border border-slate-600 py-1">診療時間</th>
							<td class="border border-slate-600 py-1">月</td>
							<td class="border border-slate-600 py-1">火</td>
							<td class="border border-slate-600 py-1">水</td>
							<td class="border border-slate-600 py-1">木</td>
							<td class="border border-slate-600 py-1">金</td>
							<td class="border border-slate-600 py-1">土</td>
							<td class="border border-slate-600 py-1">日</td>
							<td class="border border-slate-600 py-1">祝</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="border border-slate-600 py-1">09:00 ~ 12:30</th>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">✗</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
						</tr>
						<tr>
							<th class="border border-slate-600 py-1">13:00 ~ 17:30</th>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">✗</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
							<td class="border border-slate-600 py-1">●</td>
						</tr>
					</tbody>
				</table>
				<ul class="tag mt-4">
					<li><a href="#">タグ名</a></li>
					<li><a href="#">東京都</a></li>
					<li><a href="#">トリミングサロン</a></li>
				</ul>
			</div>
		</a>
	</article>
</template>
