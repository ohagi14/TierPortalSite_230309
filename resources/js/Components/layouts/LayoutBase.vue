<template>
	<header>
		<slot name="header"></slot>
	</header>
	<main>
		<template v-if="$slots.breadcrumb">
			<div class="hidden sm:block">
				<slot name="breadcrumb"></slot>
			</div>
		</template>
		<section>
			<template v-if="$slots.heading">
				<slot name="heading"></slot>
			</template>

			<slot name="contents"></slot>
		</section>
	</main>

	<slot v-if="$slots.footer" name="footer"></slot>
	<slot v-if="$slots.aside" name="aside"></slot>
</template>
