<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark p-1 fixed-top">
            <inertia-link class="navbar-brand ml-3" :href="$route('dashboard.index')">Inertia</inertia-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <inertia-link class="nav-link" :href="$route('dashboard.index')">Dashboard</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link class="nav-link" :href="$route('events.index')">Events</inertia-link>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <main role="main" class="col-md-9 m-sm-auto col-lg-10 px-4">
                    <div v-if="$page.flash.success" class="alert alert-success pt-3" role="alert">
                        {{ $page.flash.success }}
                    </div>
                    <div v-if="$page.flash.error" class="alert alert-danger pt-3" role="alert">
                        {{ $page.flash.error }}
                    </div>

                    <slot></slot>
                </main>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        components: {},
        data() {
            return {}
        },
        methods: {}
    }
</script>
