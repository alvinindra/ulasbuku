<template>
    <div class="app-container">
        <LayoutNavbar />
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
    </div>
</template>

<script>
import LayoutNavbar from '@components/layout/LayoutNavbar.vue'
export default {
    components: {
        LayoutNavbar
    }
}
</script>
