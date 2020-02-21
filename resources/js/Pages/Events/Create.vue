<template>
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create event</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <inertia-link class="btn btn-sm btn-outline-secondary" :href="$route('events.index')">Index</inertia-link>
                </div>
            </div>
        </div>

        <form @submit.prevent="submit">

            <div v-if="$page.errors.name" class="alert alert-danger" role="alert">
                {{ $page.errors.name[0] }}
            </div>
            <div v-if="$page.errors.description" class="alert alert-danger" role="alert">
                {{ $page.errors.description[0] }}
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Name"
                    v-model="name"
                    :class="{'is-invalid': $v.name.$error, 'is-valid': !$v.name.$error && $v.name.$dirty}"
                    @blur="$v.name.$touch()"
                >
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a name at least 3 characters long!
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea
                    class="form-control"
                    id="description"
                    rows="3"
                    v-model="description"
                    :class="{'is-invalid': $v.description.$error, 'is-valid': !$v.description.$error && $v.description.$dirty}"
                    @blur="$v.description.$touch()"
                ></textarea>
                <div class="valid-feedback">
                    Good!
                </div>
            </div>

            <button
                class="btn btn-primary"
                type="submit"
                :disabled="$v.$invalid"
                :class="{'disabled cursor-not-allowed': $v.$invalid}"
            >
                Create event
            </button>
        </form>
    </div>
</template>

<script>
    import Layout from '../../Shared/Layout'
    import { minLength, required } from 'vuelidate/lib/validators'

    export default {
        layout: Layout,
        metaInfo: { title: 'Events' },
        name: 'events.create',
        data() {
            return {
                name: '',
                description: ''
            }
        },
        validations: {
            name: {
                required,
                minLength: minLength(2)
            },
            description: {
                minLength: minLength(0)
            }
        },
        methods: {
            submit() {
                this.$inertia.post(this.$route('events.store'), {
                    name: this.name,
                    description: this.description
                })
            }
        }
    }
</script>

<style scoped>

</style>
