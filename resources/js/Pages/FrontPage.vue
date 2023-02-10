<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutBase from "@/components/layouts/LayoutBase.vue";
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
					<ul
						class="nav nav-tabs nav-justified flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0 mb-4"
						id="tabs-tabJustify"
						role="tablist"
					>
						<li class="nav-item flex-grow text-center" role="presentation">
							<a
								href="#tabs-hospital"
								class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent active"
								id="tabs-home-tabJustify"
								data-bs-toggle="pill"
								data-bs-target="#tabs-hospital"
								role="tab"
								aria-controls="tabs-hospital"
								aria-selected="true"
								>動物病院</a
							>
						</li>
						<li class="nav-item flex-grow text-center" role="presentation">
							<a
								href="#tabs-profileJustify"
								class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent"
								id="tabs-profile-tabJustify"
								data-bs-toggle="pill"
								data-bs-target="#tabs-profileJustify"
								role="tab"
								aria-controls="tabs-profileJustify"
								aria-selected="false"
								>トリングサロン</a
							>
						</li>
						<li class="nav-item flex-grow text-center" role="presentation">
							<a
								href="#tabs-messagesJustify"
								class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent"
								id="tabs-messages-tabJustify"
								data-bs-toggle="pill"
								data-bs-target="#tabs-messagesJustify"
								role="tab"
								aria-controls="tabs-messagesJustify"
								aria-selected="false"
								>ペットホテル</a
							>
						</li>
						<li class="nav-item flex-grow text-center" role="presentation">
							<a
								href="#tabs-food"
								class="nav-link w-full block font-medium text-xs leading-tight uppercase border-x-0 border-t-0 border-b-2 border-transparent px-6 py-3 my-2 hover:border-transparent hover:bg-gray-100 focus:border-transparent"
								id="tabs-messages-tabJustify"
								data-bs-toggle="pill"
								data-bs-target="#tabs-food"
								role="tab"
								aria-controls="tabs-food"
								aria-selected="false"
								>飲食店</a
							>
						</li>
					</ul>
					<div class="tab-content" id="tabs-tabContentJustify">
						<div
							class="tab-pane fade show active"
							id="tabs-hospital"
							role="tabpanel"
							aria-labelledby="tabs-home-tabJustify"
						>
							Tab 1 content justify
						</div>
						<div
							class="tab-pane fade"
							id="tabs-profileJustify"
							role="tabpanel"
							aria-labelledby="tabs-profile-tabJustify"
						>
							Tab 2 content justify
						</div>
						<div
							class="tab-pane fade"
							id="tabs-messagesJustify"
							role="tabpanel"
							aria-labelledby="tabs-profile-tabJustify"
						>
							Tab 3 content justify
						</div>
						<div
							class="tab-pane fade"
							id="tabs-food"
							role="tabpanel"
							aria-labelledby="tabs-profile-tabJustify"
						>
							飲食店
						</div>
					</div>
				</div>
			</section>
		</template>
		<template #footer>
			<footer class="footer"></footer>
		</template>
	</LayoutBase>
</template>
