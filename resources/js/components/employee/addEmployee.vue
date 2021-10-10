
<template>
    <div>
        <h3 class="text-center">Add Employee</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addEmployee">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="employee.name">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" class="form-control" v-model="employee.designation">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Employee</button>
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
        methods: {
            addEmployee() {

                this.axios
                    .post('http://127.0.0.1:8000/api/employee/store', this.employee)
                    .then(response => (
                        this.$router.push({name: 'ViewEmployee'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>
