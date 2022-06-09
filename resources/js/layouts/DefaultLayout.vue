<template>
	<div class="app-container">
		<LayoutNavbar />
		<keep-alive>
			<router-view></router-view>
		</keep-alive>
		<LayoutFooter />
	</div>
</template>

<script>
import LayoutNavbar from "@components/layout/LayoutNavbar.vue";
import LayoutFooter from "@components/layout/LayoutFooter.vue";

export default {
	components: {
		LayoutNavbar,
		LayoutFooter,
	},
};
</script>
