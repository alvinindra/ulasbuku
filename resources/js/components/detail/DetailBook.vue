<template>
	<div class="container my-5">
		<div class="row">
			<div class="col-lg-4 col-12 text-center">
				<img
					class="img-fluid shadow p-4"
					style="height: 300px"
					src="/assets/img/book/rindu-tere-liye.jpg"
					alt=""
				>
			</div>
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-12">
						<h2 class="font-title">Rindu</h2>
					</div>
					<div class="col-12 mb-1">
						<h5 class="font-primary color-grey">Tere Liye</h5>
					</div>
					<div class="col-12">
						<h6 class="font-primary font-weight-bold">Deskripsi Buku:</h6>
						<p class="font-primary text-justify">
							"Apalah arti memiliki, ketika did kami sendiri bukanlah milik kami?
							Apalah arti kehilangan, ketika kami sebenarnya menemukan banyak saat kehilangan dan sebaliknya, kehilangan banyak pula saat menemukan?
							Apalah arti cinta, ketika menangis terluka atas perasaan yg seharusnya indah? Bagaimana mungkin, kami terduduk patah hati atas sesuatu yang seharusnya suci dan tidak menuntut apa pun?
							Wahai, bukankah banyak kerinduan saat kami hendak melupakan? Dan tidak terbilang keinginan melupakan saat kami dalam rindu? Hingga rindu dan melupakan jaraknya setipis benang saja"
						</p>
					</div>
					<div class="col-12">
						<button
							type="button"
							data-toggle="modal"
							data-target="#exampleModalCenter"
							class="btn btn-primary"
						>Review Buku</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div
			class="modal fade"
			id="exampleModalCenter"
			tabindex="-1"
			role="dialog"
			aria-labelledby="exampleModalCenterTitle"
			aria-hidden="true"
		>
			<div
				class="modal-dialog modal-dialog-centered"
				role="document"
			>
				<div class="modal-content">
					<div class="modal-header">
						<h5
							class="modal-title"
							id="exampleModalLongTitle"
						>Form Ulasan</h5>
						<button
							type="button"
							class="close"
							data-dismiss="modal"
							aria-label="Close"
						>
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group mx-auto justify-content-center text-center">
								<star-rating
									:star-size="24"
									:padding="4"
									active-color="#B4D51E"
									:increment="0.01"
									:show-rating="false"
								></star-rating>
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">Deskripsi Ulasan</label>
								<textarea
									class="form-control"
									id="exampleFormControlTextarea1"
									rows="3"
								></textarea>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button
							type="button"
							class="btn btn-secondary"
							data-dismiss="modal"
						>Tutup</button>
						<button
							type="button"
							class="btn btn-primary"
						>Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
