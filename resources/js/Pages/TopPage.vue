<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/Components/Common/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import Card from "@/Components/Common/Card.vue";
import Prefectures from "@/Components/Parts/Prefectures.vue";

defineProps({
	prefectures: Array,
});
</script>
<template>
	<Head title="Topページ" />
	<Prefectures :prefectures="prefectures" />
	<LayoutBase>
		<template #contents>
			<section class="fs bgg h-[603px] pt-16">
				<h1 class="text-center text-white text-lg font-semibold">
					動物の暮らしをHAPPYにする動物メディア検索サイト
				</h1>
			</section>
			<section class="search-basic">
				<div class="l-container w1000">
					<TabBasic />
				</div>
			</section>
			<section class="pickup mt-16">
				<div class="l-container">
					<div class="c-title">
						<h2><i_Doubutu />ピックアップ</h2>
						<p class="mt-2">今注目の特集やイベント情報</p>
					</div>
					<div class="grid grid-cols-3 gap-6 mt-6">
						<template v-for="i in 3">
							<Card />
						</template>
					</div>
				</div>
			</section>
			<section class="useful mt-16">
				<div class="l-container">
					<div class="c-title">
						<h2><i_Doubutu />お役立ちコンテンツ（仮）</h2>
						<p class="mt-2">ここにサブタイトルが入ります</p>
					</div>
					<div class="grid grid-cols-4 gap-6 mt-6">
						<template v-for="i in 4">
							<Card />
						</template>
					</div>
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
