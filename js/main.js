Vue.config.devtools = true;
const app = new Vue(
    {
        el: '#root',
        data: {
            songs: [],
            genres: [],
            filteredSongs: [],
            selectValue: '' 
        },
        created() {
            axios
                .get('api/server.php')
                .then(response => {
                    this.songs = response.data;
                    for (let i = 0; i < this.songs.length; i++) {
                        if(!this.genres.includes(this.songs[i].genre)) {
                            this.genres.push(this.songs[i].genre);
                        }
                    }
                });   
        },
        computed: {
            filtered() {
                if (this.selectValue == '') {
                    return this.filteredSongs = this.songs;
                }
                this.filteredSongs = this.songs.filter((element) => {
                    if (element.genre == this.selectValue) {
                        return element;
                    }
                });
            }
        }
})