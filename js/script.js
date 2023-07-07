const { createApp } = Vue;

createApp({
    data() {
        return {
            taskToDo: '',
            taskList: null,
            apiUrl: 'server.php'
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.taskList = response.data;
        })
    },
    methods: {
        addToList() {
            const data = {
                taskToDo: this.taskToDo
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.taskToDo = '';
                this.taskList = response.data;
            })
        }
    }
}).mount('#app');