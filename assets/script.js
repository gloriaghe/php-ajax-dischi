new Vue({
    el: '#app',
    data: {
        dischi: [],
        genres : [],
        genre : 'all'
    },
    created() {
        this.getlist();
        axios('http://localhost:80/php-ajax-dischi/api/genres.php')
        .then(response => this.genres = response.data.response)
        .catch(err => console.log(err.message))
    },
    methods: {
       getlist(){
        axios.get('http://localhost:80/php-ajax-dischi/api.php', {
            params: {
                genre : this.genre
            }
        })
        .then(response => {
            if (response.data.success) {
                this.dischi = response.data.response
            }
        })
        .catch(err => console.log(err.message))
       },
    }

})