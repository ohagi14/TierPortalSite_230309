<script setup>
import { Link } from "@inertiajs/vue3";
import i_Map from "@/Components/Icon/Map.vue";
import i_Train from "@/Components/Icon/Train.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import { nl2br } from "@/common";

defineProps({
	hospitals: Object,
});
</script>
<template>
	{{hospitals}}
	<article
		class="media border border-[#707070] mt-8 p-6"
		v-for="hospital in hospitals.data"
		:key="hospital.id"
	>
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
				<h3>タイトル：{{ hospital.title }}</h3>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Map class="w-full" /></div>{{ hospital.prefecture }}</p>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Train class="w-full" /></div><span v-html="nl2br(hospital.train)"></span></p>
				<p class="flex gap-x-2"><div class="w-[17px] h-[17px] mt-0.5"><i_Doubutu class="w-full" /></div>{{ hospital.animal_category }}</p>
				診察時間-テーブル表記
				<ul class="tag mt-4">
					<li><a href="#">タグ名</a></li>
					<li><a href="#">東京都</a></li>
					<li><a href="#">トリミングサロン</a></li>
				</ul>
			</div>
		</div>
	</article>
</template>
