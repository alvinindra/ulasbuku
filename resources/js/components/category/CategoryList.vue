<template>
	<div class="row">
		<div
			v-for="n in 12"
			:key="n"
			class="col-3 mb-4"
		>
			<CategoryCard />
		</div>
	</div>
</template>

<script>
import CategoryCard from "@components/category/CategoryCard.vue";

export default {
	components: {
		CategoryCard,
	},
	data() {
		return {
			keyword: this.$route.query.q || "",
		};
	},
};
</script>