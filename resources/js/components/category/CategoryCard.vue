<template>
	<div
		class="card card-category"
		@click="handleToDetail"
	>
		<div class="card-category__body">
			<div class="card-category__title">
				Rindu
			</div>
		</div>
	</div>
</template>

<script>
export default {
	props: {
		book: {
			type: Object,
		},
	},
	methods: {
		handleToDetail() {
			this.$router.push({
				name: "DetailBookPage",
				params: {
					id: 3,
				},
			});
		},
	},
};
</script>

<style lang="scss" scoped>
.card-category {
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
	}

	&__rating {
		margin-bottom: 8px;
	}

	&__author {
		font: normal normal 400 14px "Nunito", sans-serif;
		color: #5d5d5d;
	}
}
</style>