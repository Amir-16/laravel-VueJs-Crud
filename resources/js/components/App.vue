<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">  Vue JS CRUD  </span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">All Posts</router-link>
                    <router-link to="/add" class="nav-item nav-link">Add Post</router-link>
                    <router-link to="/employees" class="nav-item nav-link">Employees</router-link>
                    <router-link to="/employees/store" class="nav-item nav-link"> Add Employees</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>
