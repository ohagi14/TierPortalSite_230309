<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
	hospitals: Object,
});
</script>
<template>
	<article class="media border border-[#707070] mt-8 p-6" v-for="hospital in hospitals.data" :key="hospital.id">
		<div class="media-wrap flex">
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
			<div class="media-right">
				<h3>{{ hospital.title }}</h3>
				<p>{{ hospital.prefecture }}</p>
				診察時間-テーブル表記
				<ul class="tag mt-4">
					<li><a href="#">タグ名</a></li>
					<li><a href="#">東京都</a></li>
					<li><a href="#">トリミングサロン</a></li>
				</ul>
			</div>
		</div>
	</article>
	<!-- <table class="table-auto w-full text-left whitespace-no-wrap">
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
					都道府県
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
					{{ hospital.prefecture }}
				</td>
			</tr>
		</tbody>
	</table> -->
</template>
