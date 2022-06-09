<template>
	<div class="card card-book">
		<div class="card-book__img">
			<img
				class="w-100"
				src="/assets/img/cover/j4Vz92_download.jpg"
				alt=""
			>
		</div>
		<div class="card-book__body">
			<div class="card-book__title">
				Rindu
			</div>
			<div class="card-book__author">
				Tere Liye
			</div>
		</div>
	</div>
</template>

<style lang="scss" scoped>
.card-book {
	background: #ffffff;
	border: 0;
	box-shadow: 0px 4px 24px rgba(0, 0, 0, 0.08);
	border-radius: 8px;
	padding: 16px;
	cursor: pointer;

	&__img {
		margin-bottom: 24px;
	}

	&__title {
		font: normal normal 500 1.25rem "Merriweather", sans-serif;
		margin-bottom: 8px;
	}

	&__author {
		font: normal normal 400 14px "Nunito", sans-serif;
	}
}
</style>