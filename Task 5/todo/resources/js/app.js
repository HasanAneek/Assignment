import './bootstrap';
import { createApp } from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';

// Create the Vue app
const app = createApp({});

// Use Axios with the VueAxios plugin
app.use(VueAxios, axios);

// Register your component
import Todo from "./components/Todo.vue";
app.component('todo', Todo);

// Mount the app to a DOM element with id 'app'
app.mount('#app');
