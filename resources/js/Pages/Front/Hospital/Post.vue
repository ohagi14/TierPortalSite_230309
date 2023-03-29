<script setup>
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Header from "@/Components/Common/Header.vue";
import LayoutBase from "@/Components/Common/LayoutBase.vue";

import i_Map from "@/Components/Icon/Map.vue";
import i_Train from "@/Components/Icon/Train.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
</script>
<template>
	<Head title="投稿ページ" />
	<LayoutBase>
		<Header />
		<template #contents>
			<div class="l-container flex gap-x-4 pt-16 mb-16">
				<main class="w-full max-w-[940px]">
					<article class="article-post">
						<div class="border-b border-gray-500 border-dotted py-2">
							<h1 class="text-2xl font-body">ノルド動物病院</h1>
							<p class="text-xs">ノルドドウブツビョウイン</p>
						</div>
						<ul>
							<li class="flex gap-x-2 text-sm mt-2">
								<div class="w-[12px] h-[12px] mt-0.5">
									<i_Map class="w-full" />
								</div>
								北海道札幌市清田区北野3条3丁目1-1
							</li>
							<li class="flex gap-x-2 text-sm mt-2">
								<div class="w-[12px] h-[12px] mt-0.5">
									<i_Train class="w-full" />
								</div>
								<span>
									JRおおさか東線新加美駅から徒歩約11分<br />
									JRおおさか東線新加美駅から徒歩約11分
								</span>
							</li>
							<li class="flex gap-x-2 text-sm mt-2">
								<div class="w-[12px] h-[12px] mt-0.5">
									<i_Doubutu class="w-full" />
								</div>
								犬
							</li>
						</ul>
						<figure class="mt-6">
							<img loading="lazy" src="https://placehold.jp/1920x1080.png" />
						</figure>
						<table
							class="border-collapse border border-slate-500 w-full text-center mt-6"
						>
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
					</article>
				</main>
				<aside class="sidebar max-w-[300px]">
					<div class="info p-3 bg-slate-100">
						<div class="py-3 border">
							<a href="#" target="_blank" rel="noopener noreferrer"
								>公式サイト</a
							>
						</div>
						<div class="py-3 border border-main mt-3">
							<a href="#" target="_blank" rel="noopener noreferrer"
								>電話をかける</a
							>
						</div>
					</div>
					<figure class="mt-3">
						<p>【広告枠】- サイドバー</p>
						<img loading="lazy" src="https://placehold.jp/300x300.png" />
					</figure>
				</aside>
			</div>
		</template>
	</LayoutBase>
</template>
