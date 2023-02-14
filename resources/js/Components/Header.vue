<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
	<header class="header">
		<div class="container">
			<Link class="logo bg-main max-w-[264px]" :href="route('toppage')">
				<img loading="lazy" src="https://placehold.jp/214x65.png" />
			</Link>
			<nav>
				<a href="#">Tierについて</a>
				<Link :href="route('hospital.index')">動物病院</Link>
				<a href="#">トリミングサロン</a>
				<a href="#">ペットホテル</a>
				<a href="#">飲食店</a>
			</nav>
		</div>
	</header>
</template>
