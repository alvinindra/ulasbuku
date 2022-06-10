<template>
	<header
		id="layoutHeader"
		class="p-3 px-md-4 sticky-top bg-white shadow-sm box-shadow"
	>
		<div class="container d-flex flex-column flex-md-row align-items-center">
			<a href="/"><img
					class="nav-logo"
					src="/assets/img/logo/logo.png"
					alt="Logo UlasBuku"
				></a>
			<nav class="my-2 my-md-0 mx-auto d-flex">
				<a
					class="p-2 text-dark nav-link"
					href="/"
				>Home</a>
				<a
					class="p-2 text-dark nav-link"
					href="#"
				>Bestseller</a>
				<a
					class="p-2 text-dark nav-link"
					href="#"
				>Category</a>
				<a
					class="p-2 text-dark nav-link"
					href="#"
				>Author</a>
				<a
					class="p-2 text-dark nav-link"
					href="/about"
				>About</a>
			</nav>
			<a
				class="btn btn-outline-primary"
				href="/login"
			>Login</a>
		</div>
	</header>
</template>

<style lang="scss" scoped>
.nav-logo {
	width: 120px;
}
</style>