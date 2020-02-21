<template>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Event #{{ event.id }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <inertia-link class="btn btn-sm btn-outline-primary" :href="$route('events.index')">Index</inertia-link>
                    <inertia-link class="btn btn-sm btn-outline-secondary" :href="$route('events.create')">Create</inertia-link>
                    <inertia-link class="btn btn-sm btn-outline-warning" :href="$route('events.edit', [event.id])">Edit</inertia-link>
                    <div class="btn btn-sm btn-outline-danger" @click="destroy">Delete</div>
                </div>
            </div>
        </div>

        {{ event.name }}
        {{ event.description }}
    </div>
</template>

<script>
    import Layout from '../../Shared/Layout'

    export default {
        layout: Layout,
        metaInfo: { title: 'Events' },
        name: 'events.show',
        props: ['event'],
        data() {
            return {}
        },
        methods: {
            destroy() {
                if (confirm('Are you sure you want to delete this event?')) {
                    this.$inertia.delete(this.$route('events.destroy', this.event.id))
                }
            },
        }
    }
</script>

<style scoped>

</style>
