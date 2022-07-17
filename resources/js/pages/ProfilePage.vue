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
												id="basicInfo-tab"
												data-toggle="tab"
												href="#basicInfo"
												role="tab"
												aria-controls="basicInfo"
												aria-selected="true"
											>Data Profil</a>
										</li>
										<li class="nav-item">
											<a
												class="nav-link"
												id="connectedServices-tab"
												data-toggle="tab"
												href="#connectedServices"
												role="tab"
												aria-controls="connectedServices"
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
											id="basicInfo"
											role="tabpanel"
											aria-labelledby="basicInfo-tab"
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
											id="connectedServices"
											role="tabpanel"
											aria-labelledby="ConnectedServices-tab"
										>
											Ini daftar ulasan review dari user
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
		...mapActions("auth", ["getProfile"]),
	},
	mounted() {
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
