<template>
	<div class="min-vh-100">
		<div class="container">
			<div class="row">
				<div class="col-12 mb-4">
					<div class="row">
						<div class="col-3">
							<h4 class="font-title w-100">Daftar Kategori</h4>
						</div>
						<div class="col-3 ml-auto">
							<input
								class="form-control px-3"
								type="text"
								v-model="search"
								placeholder="Cari kategori"
								@change="handleSearch"
								aria-label="Search"
							>
						</div>
					</div>
				</div>
				<CategoryList />
			</div>
		</div>
	</div>
</template>

<script>
import CategoryList from "@components/category/CategoryList.vue";

export default {
	components: {
		CategoryList,
	},
};
</script>
