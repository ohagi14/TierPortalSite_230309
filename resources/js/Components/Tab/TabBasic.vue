<script setup></script>
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
						fill="#455f83"
					/>
				</svg>
			</div>
			<div class="flex gap-x-6 mt-8">
				<div class="w-full f-todoufuken i-input">
					<input type="text" placeholder="都道府県" />
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="17.411"
						height="18"
						viewBox="0 0 17.411 18"
					>
						<g id="日本地図のアイコン" transform="translate(-8.368)">
							<path
								id="パス_1016"
								data-name="パス 1016"
								d="M163.074,425.815a.858.858,0,0,1-.857.857h-1.8a.857.857,0,0,1-.857-.857v-.4a.857.857,0,0,1,.857-.857h1.8a.857.857,0,0,1,.857.857Z"
								transform="translate(-145.88 -409.652)"
								fill="#455f83"
							/>
							<path
								id="パス_1017"
								data-name="パス 1017"
								d="M9.376,365.687H9.225a.858.858,0,0,0-.857.857v1.184c0,.474.221.858.6.858h.094c.409,0,.315.384.315.857V370a.858.858,0,0,0,.857.857h1.311A.858.858,0,0,0,12.4,370v-3.455a.858.858,0,0,0-.857-.857H9.376Z"
								transform="translate(0 -352.857)"
								fill="#455f83"
							/>
							<path
								id="パス_1018"
								data-name="パス 1018"
								d="M109.437,161.438a.852.852,0,0,0-.831.676l-.476,2.209a.852.852,0,0,1-.832.676H101.97a.855.855,0,0,0-.851.857v.649a.855.855,0,0,0,.851.857h.175a.855.855,0,0,1,.851.858v.427c0,.473.851.857.851.857h6.6a.853.853,0,0,0,.831-.675l1.379-6.352a.859.859,0,0,0-.168-.72.847.847,0,0,0-.664-.32Z"
								transform="translate(-89.474 -155.785)"
								fill="#455f83"
							/>
							<path
								id="パス_1019"
								data-name="パス 1019"
								d="M339.741,3.842a.857.857,0,0,1-.843.7H335.17a.858.858,0,0,1-.842-1.018L334.867.7a.858.858,0,0,1,.842-.7h3.729a.858.858,0,0,1,.842,1.019Z"
								transform="translate(-314.516)"
								fill="#455f83"
							/>
						</g>
					</svg>
				</div>
				<div class="w-full f-doubutu i-input">
					<input type="text" placeholder="診療対象動物" />
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="23.015"
						height="18"
						viewBox="0 0 23.015 18"
					>
						<g
							id="グループ_382"
							data-name="グループ 382"
							transform="translate(635)"
						>
							<g id="肉球のアイコン1" transform="translate(-635)">
								<path
									id="パス_874"
									data-name="パス 874"
									d="M121,60.655a2.5,2.5,0,1,0-3.179-1.557A2.5,2.5,0,0,0,121,60.655Z"
									transform="translate(-112.399 -55.783)"
									fill="#455f83"
								/>
								<path
									id="パス_875"
									data-name="パス 875"
									d="M4.6,168.721h0A2.5,2.5,0,1,0,.4,166h0a2.5,2.5,0,0,0,4.2,2.719Z"
									transform="translate(0 -159.956)"
									fill="#455f83"
								/>
								<path
									id="パス_876"
									data-name="パス 876"
									d="M284.651,60.654a2.5,2.5,0,1,0-1.557-3.179A2.5,2.5,0,0,0,284.651,60.654Z"
									transform="translate(-270.24 -55.782)"
									fill="#455f83"
								/>
								<path
									id="パス_877"
									data-name="パス 877"
									d="M101.388,191.489c-3.954,0-8.316,5.478-7.053,9.375,1.219,3.763,5.029,2.212,7.053,2.212s5.834,1.551,7.053-2.212C109.7,196.967,105.342,191.489,101.388,191.489Z"
									transform="translate(-89.881 -185.393)"
									fill="#455f83"
								/>
								<path
									id="パス_878"
									data-name="パス 878"
									d="M405.272,166h0a2.5,2.5,0,1,0-4.2,2.72h0a2.5,2.5,0,0,0,4.2-2.719Z"
									transform="translate(-382.659 -159.955)"
									fill="#455f83"
								/>
							</g>
						</g>
					</svg>
				</div>
				<div class="w-full f-others i-input">
					<input type="text" placeholder="その他条件" />
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="18"
						height="18"
						viewBox="0 0 18 18"
					>
						<path
							id="ic_add_to_photos_24px"
							d="M3.8,5.6H2V18.2A1.805,1.805,0,0,0,3.8,20H16.4V18.2H3.8ZM18.2,2H7.4A1.805,1.805,0,0,0,5.6,3.8V14.6a1.805,1.805,0,0,0,1.8,1.8H18.2A1.805,1.805,0,0,0,20,14.6V3.8A1.805,1.805,0,0,0,18.2,2Zm-.9,8.1H13.7v3.6H11.9V10.1H8.3V8.3h3.6V4.7h1.8V8.3h3.6Z"
							transform="translate(-2 -2)"
							fill="#455f83"
						/>
					</svg>
				</div>
			</div>
			<button class="btn flex items-center justify-center bg-main text-white mt-8 w-[336px] h-16 mx-auto gap-x-2 font-semibold">
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
						fill="#fff"
					/>
				</svg>
				検索する
			</button>
		</div>
	</div>
</template>
