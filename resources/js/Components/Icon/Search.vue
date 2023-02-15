<script setup>
const	props = defineProps({
	color: {
		default: '#455f83',
	}
})
</script>
<template>
	<svg
		xmlns="http://www.w3.org/2000/svg"
		width="18"
		height="18"
		viewBox="0 0 18 18"
	>
		<path
			id="ic_search_24px"
			d="M15.864,14.321h-.813l-.288-.278a6.7,6.7,0,1,0-.72.72l.278.288v.813L19.467,21,21,19.467Zm-6.175,0A4.631,4.631,0,1,1,14.321,9.69,4.625,4.625,0,0,1,9.69,14.321Z"
			transform="translate(-3 -3)"
			:fill="props.color"
		/>
	</svg>
</template>
