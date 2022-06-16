<template>
	<div class="min-vh-100">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center mb-4">
					<h4 class="font-title">UlasBuku - Tim</h4>
				</div>
				<div
					v-for="team in listTeam"
					:key="team.id"
					class="col-lg-4 text-center"
				>
					<div
						class="card mx-auto"
						style="width: 18rem;"
					>
						<img
							class="card-img-top"
							:src="team.img"
							alt="Card image cap"
						>
						<div class="card-body">
							<h6>{{ team.name }}</h6>
							<p class="card-text">{{ team.description }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			listTeam: [
				{
					id: 1,
					name: "Alvin Indra Pratama",
					description: "Front-End Developer",
					img: "https://avatars.githubusercontent.com/u/30944414?v=4",
				},
				{
					id: 2,
					name: "Asep Saepul Rohmat",
					description: "Full-Stack Developer",
					img: "https://avatars.githubusercontent.com/u/57656151?v=4",
				},
				{
					id: 3,
					name: "Fajar Kurnia",
					description: "Front-End Developer",
					img: "https://avatars.githubusercontent.com/u/93042623?v=4",
				},
			],
		};
	},
};
</script>
