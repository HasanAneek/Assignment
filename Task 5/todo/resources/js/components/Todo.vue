<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Todo App</div>

                    <div class="card-body">
                        <!-- Flash message -->
                        <div v-if="flashMessage" class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ flashMessage }}
                            <button type="button" class="btn-close" @click="flashMessage = ''" aria-label="Close"></button>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" placeholder="Enter your todo..." class="form-control" v-model="todo_input">
                            <div class="input-group-append">
                                <button v-if="!edit_todo_id" type="button" class="btn btn-primary" @click="saveTodo()">
                                    <i class="fas fa-plus ms-3"></i> Add
                                </button>
                                <button v-else type="button" class="btn btn-warning" @click="updateTodo()">
                                    <i class="fas fa-save"></i> Update
                                </button>
                            </div>
                        </div>

                        <button v-if="edit_todo_id" type="button" class="btn btn-secondary float-right" @click="resetTodo()">
                            <i class="fas fa-undo"></i> Reset
                        </button>

                        <table class="table table-striped table-hover mt-4">
                            <thead class="table-dark text-dark">
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            <tr v-for="(todo, index) in todos" :key="index">
                                <td>{{ index + 1 }}</td>
                                <td>{{ todo.name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm me-3" @click="editTodo(index)">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm" @click="deleteTodo(index)">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            <tr v-if="todos.length === 0">
                                <td colspan="3" class="text-center">No todos found</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            todos: [],
            todo_input: '',
            edit_todo_id: null,
            edit_index: null,
            flashMessage: '',
            api: 'http://localhost:8000/api/todos',
        };
    },
    mounted() {
        this.fetchTodos();
    },
    methods: {
        fetchTodos() {
            this.axios.get(this.api)
                .then(res => {
                    this.todos = res.data;
                })
                .catch(error => {
                    console.error("Error fetching todos:", error);
                });
        },
        saveTodo() {
            if (this.todo_input.trim() === '') {
                return;
            }
            let data = { name: this.todo_input };
            this.axios.post(this.api, data)
                .then(res => {
                    this.todos.push(res.data);
                    this.todo_input = '';
                    this.flashMessage = 'Todo added successfully!';
                    setTimeout(() => this.flashMessage = '', 3000);
                });
        },
        deleteTodo(index) {
            if (this.todos[index].id) {
                this.axios.delete(this.api + '/' + this.todos[index].id)
                    .then(res => {
                        this.todos.splice(index, 1);
                        this.flashMessage = 'Todo deleted successfully!';
                        setTimeout(() => this.flashMessage = '', 3000);
                    });
            }
        },
        editTodo(index) {
            this.todo_input = this.todos[index].name;
            this.edit_todo_id = this.todos[index].id;
            this.edit_index = index;
        },
        updateTodo() {
            if (this.todo_input.trim() === '') {
                return;
            }
            let data = { name: this.todo_input };
            this.axios.patch(this.api + '/' + this.todos[this.edit_index].id, data)
                .then(res => {
                    this.todos[this.edit_index].name = res.data.name;
                    this.resetTodo();
                    this.flashMessage = 'Todo updated successfully!';
                    setTimeout(() => this.flashMessage = '', 3000);
                });
        },
        resetTodo() {
            this.todo_input = '';
            this.edit_index = null;
            this.edit_todo_id = null;
        }
    }
}
</script>

<!-- Include FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
