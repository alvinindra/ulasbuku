<template>
	<div class="col-md-3 col-12">
		<div class="border-bottom mb-3">
			<h4 class="font-title">Filter</h4>
		</div>
		<div class="d-block">
			<div class="mb-4">
				<div class="h6">Urutkan Berdasar</div>
				<div
					class="form-check"
					v-for="sort in listFilterSorting"
					:key="sort.id"
				>
					<input
						class="form-check-input"
						type="radio"
						name="gridRadios"
						:id="`sort${sort.id}`"
						v-model="selectedSort"
						:value="sort.value"
						checked
					>
					<label
						class="form-check-label"
						:for="`sort${sort.id}`"
					>
						{{ sort.name }}
					</label>
				</div>
			</div>
			<div class="mb-4">
				<div class="h6">Kategori</div>
				<div
					class="form-check"
					v-for="category in listFilterCategory"
					:key="category.id"
				>
					<input
						class="form-check-input"
						type="radio"
						name="gridRadios"
						:id="`category${category.id}`"
						v-model="selectedCategory"
						:value="category.value"
						checked
					>
					<label
						class="form-check-label"
						:for="`category${category.id}`"
					>
						{{ category.name }}
					</label>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			selectedSort: "",
			selectedCategory: "",
			listFilterSorting: [
				{
					id: 1,
					name: "Terbaru",
					value: "terbaru",
				},
				{
					id: 2,
					name: "Terlama",
					value: "terlama",
				},
				{
					id: 3,
					name: "Terpopuler",
					value: "terpopuler",
				},
			],
			listFilterCategory: [
				{
					id: 1,
					name: "Novel",
					value: "novel",
				},
				{
					id: 2,
					name: "Romantis",
					value: "romantis",
				},
				{
					id: 3,
					name: "Pengembangan Diri",
					value: "pengembangan-diri",
				},
			],
		};
	},
};
</script>