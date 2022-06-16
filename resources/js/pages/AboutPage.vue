<template>
	<div class="min-vh-100">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center mb-4">
					<h4 class="font-title">UlasBuku - Tim</h4>
				</div>
				<div
					v-for="n in 3"
					:key="n"
					class="col-lg-4"
				>
					<div
						class="card"
						style="width: 18rem;"
					>
						<img
							class="card-img-top"
							src="https://placeimg.com/300/300/people"
							alt="Card image cap"
						>
						<div class="card-body">
							<h6>UlasBuku Team Member</h6>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
</script>
