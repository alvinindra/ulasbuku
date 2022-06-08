<template>
	<section class="container my-5">
		<div class="title mb-3">
			<h4 class="font-title">Buku Terbaru</h4>
		</div>
		<div class="row">
			<div
				v-for="n in 6"
				:key="n"
				class="col-lg-2 col-6 mb-4"
			>
				<CardBook />
			</div>
		</div>
	</section>
</template>

<script>
import CardBook from "@components/base/CardBook.vue";

export default {
	components: {
		CardBook,
	},
};
</script>