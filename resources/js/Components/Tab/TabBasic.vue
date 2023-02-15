<script setup>
import i_Search from "@/Components/Icon/Search.vue";
import i_Japan from "@/Components/Icon/Japan.vue";
import i_Doubutu from "@/Components/Icon/Doubutu.vue";
import i_Others from "@/Components/Icon/Others.vue";
import i_Plus from "@/Components/Icon/Plus.vue";
</script>
<template>
	<div class="tab top-[-225px]">
		<ul class="tab-list">
			<li class="active">動物病院</li>
			<li>トリミングサロン</li>
			<li>ペットホテル</li>
			<li>飲食店</li>
		</ul>
		<div class="tab-content">
			<div class="f-search i-input">
				<input type="search" placeholder="病院名や駅名などを入力してください" />
				<i_Search />
			</div>
			<div class="flex gap-x-6 mt-8">
				<div class="w-full f-japan i-input i-plus">
					<input type="text" placeholder="都道府県" />
					<i_Japan />
					<i_Plus />
				</div>
				<div class="w-full f-doubutu i-input i-plus">
					<input type="text" placeholder="診療対象動物" />
					<i_Doubutu />
					<i_Plus />
				</div>
				<div class="w-full f-others i-input i-plus">
					<input type="text" placeholder="その他条件" />
					<i_Others />
					<i_Plus />
				</div>
			</div>
			<button class="btn shadow-md flex items-center justify-center bg-main text-white mt-8 w-[336px] h-16 mx-auto gap-x-2 font-semibold">
				<i_Search color="#fff" />
				検索する
			</button>
		</div>
	</div>
</template>
