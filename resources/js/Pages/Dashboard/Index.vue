<template>
    <div class="starter-template">
        <h1>{{ 'Dashboard' }}</h1>
        <p class="lead">
            {{ testing }}
        </p>
    </div>
</template>

<script>
    import Layout from '../../Shared/Layout'

    export default {
        layout: Layout,
        metaInfo: { title: 'Dashboard' },
        name: 'dashboard',
        data() {
            return {
                testing: ['Dit is een inertia.js test']
            }
        }
    }
</script>

<style scoped>

</style>
