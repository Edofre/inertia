<template>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Events</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <inertia-link class="btn btn-sm btn-outline-secondary" :href="$route('events.create')">Create</inertia-link>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="event in events">
                        <td>
                            <inertia-link :href="$route('events.show', [event.id])">#{{ event.id }}</inertia-link>
                        </td>
                        <td>{{ event.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    import Layout from '../../Shared/Layout'

    export default {
        layout: Layout,
        metaInfo: { title: 'Events' },
        name: 'events.index',
        props: ['events'],
        data() {
            return {
                testing: ['Dit is een inertia.js test']
            }
        }
    }
</script>

<style scoped>

</style>
