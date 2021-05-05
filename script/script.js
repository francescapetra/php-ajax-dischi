 var app = new Vue(
  {
    el:"#root",
    data:{
      albums: [],
      categories: ["All"],
      select:"",
    },
    methods:{
      searchGenre: function() {
        //potevi farlo in mounted sotto l'axios da qui
        this.albums.forEach((genere) => {
          if (this.categories.includes(genere.genre) == false) {
            this.categories.push(genere.genre);
          }
        });
      },
    },
     computed: {
       sortedYear: function() {
        console.log(this.albums);
         function compare(a, b) {
           if (a.year < b.year)
             return -1;
            if (a.year > b.year)
             return 1;
             return 0;
           }
           return this.albums.sort(compare);
         }
       },
    mounted: function(){
      axios.get('http://localhost/php-ajax-dischi/api.php')
      .then((request) =>{
      const result = request.data;
      this.albums = result;
      this.searchGenre();
      });
    },
  }
);
