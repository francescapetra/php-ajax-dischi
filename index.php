<?php
    include __DIR__ . '/db.php';
?>



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
  <title>Spotify-vue</title>
</head>
<body>
    <div class="container">
      <header>
        <div class="logo">
          <i class="fab fa-spotify"></i>
        </div>
        <label for="">
          <p class="p_select">Seleziona genere</p>
          <select class="select_genre" name="seleziona genere" v-model="select">
         <!-- option -->
            <?php
                foreach ($genres as $genre): ?> 
                <option> <?php echo $genre ?></option>
            <?php endforeach; ?>
         <!-- end option -->
          </select>
        </label>
      </header>
      <main>
        <?php
            foreach ($response as $album): ?> 
             <div class="card">
                <div class="img_container">
                    <img src="<?php echo $album['poster']?>" alt="">
                </div>
                <div class="content">
                    <h2><?php echo $album['title']?></h2>
                    <p class="p_content"><?php echo $album['author']?></p>
                    <p class="p_content"><?php echo $album['genre']?></p>
                    <p class="p_content"><?php echo $album['year']?></p>
                </div>
                </div>      
            <?php endforeach; ?>
      </main>
    </div>
</body>
</html>