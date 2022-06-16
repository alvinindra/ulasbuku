<template>
	<nav class="my-2 my-md-4 justify-content-center mx-auto d-flex">
		<a
			v-for="nav in listNavigation"
			:key="nav.name"
			class="p-2 nav-link"
			:class="{'active': nav.pageName === $route.name}"
			:href="nav.url"
		>{{ nav.name }}</a>
	</nav>
</template>

<script>
export default {
	data() {
		return {
			listNavigation: [
				{
					name: "Home",
					pageName: "HomePage",
					url: "/",
				},
				{
					name: "Category",
					pageName: "CategoryPage",
					url: "/category",
				},
				{
					name: "Author",
					pageName: "AuthorPage",
					url: "/author",
				},
				{
					name: "About",
					pageName: "AboutPage",
					url: "/about",
				},
			],
		};
	},
};
</script>