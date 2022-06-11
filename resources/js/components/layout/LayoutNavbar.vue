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
			<form class="form-inline mx-auto w-100 nav-search my-2 my-md-0">
				<input
					class="form-control w-100 badge-pill px-3"
					type="text"
					placeholder="Cari Buku, Komik, Novel, dan lainnya..."
					aria-label="Search"
				>
			</form>
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

.nav-search {
	max-width: 500px;
}
</style>