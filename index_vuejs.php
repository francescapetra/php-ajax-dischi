


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <title>Spotify-vue</title>
</head>
<body>

  <div id="root">
    <div class="container">
      <header>
        <div class="logo">
          <i class="fab fa-spotify"></i>
        </div>
        <label for="">
          <p class="p_select">Seleziona genere</p>
          <select class="select_genre" name="seleziona genere" v-model="select">
            <option v-for="item in categories" :value="item">{{item}}</option>
          </select>
        </label>
      </header>
      <main>
        <div class="card" v-for="(album, index) in sortedYear" v-if="(album.genre == select) || (select == 'All') || (select == '')">
          <div class="img_container">
            <img :src="album.poster" alt="img">
          </div>
          <div class="content">
            <h2>{{album.title}}</h2>
            <p class="p_content">{{album.author}}</p>
            <p class="p_content">{{album.genre}}</p>
            <p class="p_content">{{album.year}}</p>
          </div>
        </div>
      </main>

    </div>


  </div>

  <script src="script/script.js" charset="utf-8"></script>


</body>
</html>
