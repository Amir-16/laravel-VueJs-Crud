<template>
    <div>
        <h3 class="text-center">Edit Employee</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateEmployee">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="employee.title">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" v-model="employee.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employee</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                employee: {}
            }
        },
        created() {
            this.axios
                .get(`http://127.0.0.1:8000/api/employee/edit/${this.$route.params.id}`)
                .then((response) => {
                    this.employee = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateEmployee() {
                this.axios
                    .employee(`http://127.0.0.1:8000/api/post/update/${this.$route.params.id}`, this.post)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>
