<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/Components/Layouts/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";
</script>
<template>
	<Head title="Topページ" />
	<LayoutBase>
		<template #contents>
			<section class="fs bgg h-[603px] pt-16">
				<h1 class="text-center text-white text-lg font-semibold">
					動物の暮らしをHAPPYにする動物メディア検索サイト
				</h1>
			</section>
			<section class="search-basic">
				<div class="container">
					<TabBasic />
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
