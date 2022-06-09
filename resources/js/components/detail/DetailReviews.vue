<template>
	<div class="container my-4">
		<div class="row mb-3">
			<div class="col-sm-12">
				<h4 class="font-title">Ulasan</h4>
			</div>
		</div>
		<div class="row">
			<div
				v-for="n in 3"
				:key="n"
				class="col-lg-12 mb-4"
			>
				<div class="row">
					<div class="col-2 col-lg-1">
						<div class="thumbnail">
							<img
								class="img-fluid rounded-circle"
								src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"
							>
						</div>
					</div>

					<div class="col-10 col-lg-11">
						<div class="card card-default">
							<div class="card-header d-flex">
								<strong>Anninda</strong>
								<div class="mx-3">Memberikan rating</div>
								<star-rating
									class="mb-auto"
									:rating="4.6"
									:star-size="16"
									:read-only="true"
									:padding="4"
									active-color="#B4D51E"
									:increment="0.01"
									:show-rating="false"
								></star-rating>
							</div>
							<div class="card-body">
								4.9 Star. Anddddddddd. This is my last book for tere-liye collection which i've bought them about a year ago. Will buy more, insyaAllah. <br><br>

								This book is good as well as other book kecuali yang satu tu, you know which and nampak sangat lah kenapa dapat award Buku islamis terbaik 2015 <br><br>

								Hats off Tere liye!
							</div>
							<div class="card-footer">
								<span class="text-muted">Memberi ulasan 5 hari yang lalu</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</template>

<style lang="scss" scoped>
.vue-star-rating-star {
	margin-bottom: 2px;
}
