<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/Components/Layouts/LayoutBase.vue";
import TabBasic from "@/Components/Tab/TabBasic.vue";
import "tw-elements";
</script>
<template>
	<Head title="Topページ" />
	<LayoutBase>
		<template #header>
			<header class="header">
				<div class="container">
					<a class="logo bg-main max-w-[264px]" href="./index">
						<img loading="lazy" src="https://placehold.jp/214x65.png" />
					</a>
					<nav>
						<a href="#">Tierについて</a>
						<a href="#">動物病院</a>
						<a href="#">トリミングサロン</a>
						<a href="#">ペットホテル</a>
						<a href="#">飲食店</a>
					</nav>
				</div>
			</header>
		</template>
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
