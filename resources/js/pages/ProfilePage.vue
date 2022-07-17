<template>
	<div class="min-vh-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">

						<div class="card-body">
							<div class="card-title mb-4">
								<div class="d-flex justify-content-start">
									<div class="image-container">
										<img
											src="http://placehold.co/150x150?text=Profile"
											id="imgProfile"
											style="width: 150px; height: 150px"
											class="img-thumbnail"
										/>
										<div class="middle">
											<input
												type="button"
												class="btn btn-secondary"
												id="btnChangePicture"
												value="Change"
											/>
											<input
												type="file"
												style="display: none;"
												id="profilePicture"
												name="file"
											/>
										</div>
									</div>
									<div class="userData ml-3">
										<h2
											class="d-block font-title"
											style="font-size: 1.5rem; font-weight: bold"
										>{{ user.name }}</h2>
										<h6 class="d-block "><span class="h5 font-title">{{ user.total_reviews }}</span> Total Mengulas</h6>
									</div>
									<div class="ml-auto">
										<input
											type="button"
											class="btn btn-primary d-none"
											id="btnDiscard"
											value="Discard Changes"
										/>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12">
									<ul
										class="nav nav-tabs mb-4"
										id="myTab"
										role="tablist"
									>
										<li class="nav-item">
											<a
												class="nav-link active"
												id="profil-tab"
												data-toggle="tab"
												href="#profil"
												role="tab"
												aria-controls="profil"
												aria-selected="true"
											>Data Profil</a>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												id="reviews-tab"
												data-toggle="tab"
												href="#reviews"
												role="tab"
												aria-controls="reviews"
												aria-selected="false"
											>Riwayat Ulasan</a>
										</li>
									</ul>
									<div
										class="tab-content ml-1"
										id="myTabContent"
									>
										<div
											class="tab-pane fade show active"
											id="profil"
											role="tabpanel"
											aria-labelledby="profil-tab"
										>

											<div class="row">
												<div class="col-sm-3 col-md-2 col-5">
													<label style="font-weight:bold;">Nama Lengkap</label>
												</div>
												<div class="col-md-8 col-6">
													{{ user.name }}
												</div>
											</div>
											<hr />

											<div class="row">
												<div class="col-sm-3 col-md-2 col-5">
													<label style="font-weight:bold;">Email</label>
												</div>
												<div class="col-md-8 col-6">
													{{ user.email }}
												</div>
											</div>
											<hr />

											<div class="row">
												<div class="col-sm-3 col-md-2 col-5">
													<label style="font-weight:bold;">Bergabung Pada</label>
												</div>
												<div class="col-md-8 col-6">
													{{ formatDateInd }}
												</div>
											</div>
										</div>
										<div
											class="tab-pane fade"
											id="reviews"
											role="tabpanel"
											aria-labelledby="reviews-tab"
											v-if="listReviews.length > 0"
										>
											<div
												v-for="review in listReviews"
												:key="review.id"
												class="col-lg-12 mb-4"
											>
												<div class="row">
													<div class="col-12 col-lg-12">
														<div class="card">
															<div class="card-header d-flex">
																<div class="mr-3">Memberikan rating</div>
																<star-rating
																	class="mb-auto"
																	:rating="review.rating"
																	:star-size="16"
																	:read-only="true"
																	:padding="4"
																	active-color="#B4D51E"
																	:increment="0.01"
																	:show-rating="false"
																></star-rating>
															</div>
															<div class="card-body">
																{{ review.review_content }} <span class="color-grey font-italic">- {{ review.book.title }}</span>
															</div>
															<div class="card-footer">
																<span class="text-muted">Memberi ulasan {{ review.created_at }}</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<scroll-loader
												class="col-12 mx-auto"
												:loader-method="initComponent"
												:loader-disable="loaderDisable"
											>
											</scroll-loader>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import { mapActions, mapState } from "vuex";

export default {
	data() {
		return {
			listReviews: [],
			loaderDisable: false,
			page: 1,
		};
	},
	computed: {
		...mapState("auth", ["user"]),
		formatDateInd() {
			let date = new Date(this.user.created_at);
			let day = date.getDate();
			const formatMonth = [
				"Januari",
				"Februari",
				"Maret",
				"April",
				"Mei",
				"Juni",
				"Juli",
				"Agustus",
				"September",
				"Oktober",
				"November",
				"Desember",
			];
			let month = formatMonth[date.getMonth() - 1];
			let year = date.getFullYear();
			return day + " " + month + " " + year;
		},
	},
	methods: {
		...mapActions("auth", ["getProfile", "getListReviews"]),
		async initComponent() {
			try {
				const payload = {
					params: {
						page: this.page++,
					},
				};
				const res = await this.getListReviews(payload);
				this.listReviews = res.data.data.data;
				this.loaderDisable = this.listReviews.length === res.data.data.total;
			} catch (error) {
				console.error(error);
			}
		},
	},
	mounted() {
		this.initComponent();
		this.getProfile();
	},
};
</script>

<style lang="scss" scoped>
.image-container {
	position: relative;
}

.image {
	opacity: 1;
	display: block;
	width: 100%;
	height: auto;
	transition: 0.5s ease;
	backface-visibility: hidden;
}

.middle {
	transition: 0.5s ease;
	opacity: 0;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	text-align: center;
}

.image-container:hover .image {
	opacity: 0.3;
}

.image-container:hover .middle {
	opacity: 1;
}
</style>
