<template>
	<section class="pt-4 mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div
							class="cover-login"
							style="background-image:url(/assets/img/book/cover-login.jpg)"
						></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4 font-title">Masuk</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a
											href="#"
											class="social-icon d-flex align-items-center justify-content-center"
										><span class="fa fa-facebook"></span></a>
										<a
											href="#"
											class="social-icon d-flex align-items-center justify-content-center"
										><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form
								action="#"
								class="signin-form"
							>
								<div class="form-group mt-3">
									<label
										class="form-control-placeholder"
										for="email"
									>Email</label>
									<input
										type="text"
										class="form-control"
										required
									>
								</div>
								<div class="form-group">
									<label
										class="form-control-placeholder"
										for="password"
									>Password</label>
									<input
										id="password-field"
										type="password"
										class="form-control"
										required
									>

									<span
										toggle="#password-field"
										class="fa fa-fw fa-eye field-icon toggle-password"
									></span>
								</div>
								<div class="form-group">
									<button
										type="submit"
										class="form-control btn btn-primary rounded submit px-3"
									>Masuk</button>
								</div>
							</form>
							<p class="text-center">Belum punya akun?
								<router-link to="/register">
									Daftar Akun
								</router-link>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<style lang="scss" scoped>
.cover-login {
	height: 150px;
}

.wrap {
	width: 100%;
	overflow: hidden;
	background: #fff;
	border-radius: 5px;
	-webkit-box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
	-moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
	box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
}
</style>