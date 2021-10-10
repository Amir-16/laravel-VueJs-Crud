<template>
    <div class="card">

        <div class="card-header" >
            <div class="row">
            <!-- <div class="col-md-2">
                <input type="text" placeholder="Search" v-model="search" class="form-control form-control-sm">
                </div> -->
            </div>
        </div>
        <h3 class="text-center "> Employee List </h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="employee in employees" :key="employee.id">
                <td>{{ employee.id }}</td>
                <td>{{ employee.title }}</td>
                <td>{{ employee.description }}</td>
                <td>{{ employee.created_at }}</td>
                <td>{{ employee.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'employees/edit', params: { id: employee.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteEmployee(employee.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                employees: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/employee/view')
                .then(response => {
                    this.employees = response.data;
                });
        },
        methods: {
            deleteEmployee(id) {
                this.axios
                    .delete(`http://127.0.0.1:8000/api/employee/delete/${id}`)
                    .then(response => {
                        let i = this.employees.map(item => item.id).indexOf(id); // find index of your object
                        this.employees.splice(i, 1)
                    });
            }
        }
    }
</script>
