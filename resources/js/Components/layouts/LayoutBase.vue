<script setup>
import Header from "@/Components/Header.vue";
</script>

<template>
	<template v-if="$slots.header">
		<slot name="header"></slot>
	</template>
	<Header v-else />
	<main class="main">
		<template v-if="$slots.breadcrumb">
			<div class="hidden sm:block">
				<slot name="breadcrumb"></slot>
			</div>
		</template>
		<template v-if="$slots.heading">
			<slot name="heading"></slot>
		</template>

		<slot name="contents"></slot>
	</main>
	<template v-if="$slots.footer">
		<slot name="footer"></slot>
	</template>
	<slot v-if="$slots.aside" name="aside"></slot>
</template>
