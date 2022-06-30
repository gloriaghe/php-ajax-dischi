new Vue({
    el: '#app',
    data: {
        dischi: [],
    },
    created() {
        axios.get('http://localhost:80/php-ajax-dischi/api.php')
            .then(response => this.dischi = response.data);
        
    },
    methods: {
       
    }

})