const { createApp } = Vue;

createApp({
    data() {
        return {
            hello: 'Hello world',
            apiUrl: 'server.php'
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            console.log(response.data)
        })
    }
}).mount('#app');