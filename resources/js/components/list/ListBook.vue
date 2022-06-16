<template>
	<div class="col-md-9 col-12">
		<div class="mb-3 border-bottom">
			<h4 class="font-title">Buku <span
					v-if="keyword !== ''"
					class="h6"
				>(Kata kunci: {{ keyword }})</span></h4>
		</div>
		<div class="row">
			<div
				v-for="n in 12"
				:key="n"
				class="col-3 mb-4"
			>
				<CardBook />
			</div>
		</div>
	</div>
</template>

<script>
import CardBook from "@components/base/CardBook.vue";

export default {
	components: {
		CardBook,
	},
	data() {
		return {
			keyword: this.$route.query.q || "",
		};
	},
};
</script>