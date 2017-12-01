<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Index Staline</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class='container'>
      <header>
        <h1 class='m-3' style='text-align :center'>Bibliothèque Staline</h1>
      </header>
      <main>
        <section class='col-sm-12 col-md-7 d-inline-block card h-100 ml-4 mt-3' id="book">
          <h2>nouveau Livre</h2>
          <!-- form to added a new book -->
          <form class="d-flex flex-wrap flex-column justify-content-around m-3 p-2 card" action="" method="post">
            <label for="">titre</label>
            <input type="text" name="title" value=""><br>
            <label for="">auteur</label>
            <input type="text" name="author" value=""><br>
            <label for="">résumé</label>
            <input type="text" name="resume" value="">
            <label for="">categorie</label>
            <select class="" name="category">
              <option value="science fiction">science fiction</option>
              <option value="fantasy">fantasy</option>
              <option value="policier">policier</option>
              <option value="romance">romance</option>
              <option value="aventure">aventure</option>
            </select>
            <label for="">date de sortie</label>
            <input type="date" name="dateSortie" value="">
            <input class='mt-3 btn btn-primary' type="submit" name="addBook" value="ajouter livre">
          </form>
          <section class='d-flex flex-column justify-content-around'>
            <!-- form to sort book's list -->
            <form class="m-3" action="" method="post">
              <label for="">Rechercher par : </label>
              <select class="" name="trieBook">
                <option value="category">catégorie</option>
                <option value="title">titre</option>
                <option value="author">auteur</option>
              </select>
              <input type="text" name="cleTrie" value="">
              <input type="submit" name="trie" value="rechercher">
            </form>
            <!-- book's list -->
            <section class='m-3'>
            <?php
            if (!empty($displaybooks)) {
              foreach ($displaybooks as $key => $value) { ?>
                <article class="card d-flex flex-column justify-content-around mt-3 <?php
                //condition for choose the bg color
                 if ($value['available']): ?>
                  bg-success
                <?php endif; ?>
                <?php
                $today = new DateTime();
                $dateReturn = $value['dateReturn'];
                if($today > $dateReturn and !$value['available']){
                  ?>
                  bg-danger
                  <?php
                }
                if(!$value['available']){
                  ?>bg-warning
                  <?php
                } ?>">
                  <h3><?php echo $value['title']; ?></h3>
                  <div class="d-flex justify-content-around">
                    <p><?php echo $value['author']; ?></p>
                    <p><?php $date = new DateTime($value['releaseDate']);
                    $date = $date->format('d-m-Y');
                    echo $date; ?></p>
                    <p><?php echo $value['category']; ?></p>
                  </div>
                  <form style='text-align:center' class="m-2" action="control/controlDetailLivre.php" method="post">
                    <input class='d-none' type="text" name="idBook" value="<?php echo $value['idBook'];?>">
                    <input class='btn' type="submit" name="" value="détail">
                  </form>

                  <?php if ($value['available']): ?>
                    <!-- form for borrow a book to an user -->
                    <form style='width:100px;' class="mx-auto pb-2" action="" method="post">
                      <input class='d-none' type="text" name="idBook" value="<?php echo $value['idBook'];?>">
                      <label for="">prêter le livre à : </label>
                      <select class="" name="borrower">
                        <?php foreach ($displayUsers as $keyUser => $valueUser) { ?>
                          <option value="<?php echo $valueUser['idUser'] ?>"><?php echo $valueUser['firstName']. " ".$valueUser['name']; ?></option>
                        <?php } ?>
                      </select><br>
                      <input class='btn' type="submit" name="borrow" value="effectuer emprunt">
                    </form>
                  <?php endif; ?>

                  <?php if (!$value['available']):?>
                    <p style='width:200px' class='mx-auto'>date retour : <?php echo $value['dateReturn']?></p>
                    <form style='width:100px;' class="mx-auto pb-2" action="" method="post">
                      <input class='d-none' type="text" name="livreRendu" value="<?php echo $value['idBook'] ?>">
                      <input class='btn' type="submit" name="rendreLivre" value="rendre livre">
                    </form>
                  <?php endif; ?>
                </article>
            <?php }
            }
            else {
              ?> <h2>Désolé, ce que vous recherchez n'est pas dans nos archives.</h2>
              <?php
            } ?>
            </section>
          </section>
        </section>

        <!-- section user -->
        <aside class=" card col-sm-12 col-md-4 d-inline-block h-100 ml-4" id='user'>
          <h2>liste utilisateur</h2>

          <!-- section to list users -->
          <section class='d-flex flex-column justify-content-around'>
            <?php
            if (isset($displayUsers) and !empty($displayUsers)) {
              foreach ($displayUsers as $key => $value) { ?>
                <article class="card m-2">
                  <h3><?php echo $value['name']; ?></h3>
                  <h5><?php echo $value['firstName']; ?></h5>
                  <form class="d-flex flex-row justify-content-center" action="control/controlUser.php" method="post">
                    <input class='d-none' type="text" name="idUser" value="<?php echo $value['idUser']; ?>">
                    <input class='btn mb-2' type="submit" name="" value="détail Utilisateur">
                  </form>
                </article>
            <?php }
          } ?>
          </section>
          <h2>nouvel utilisateur</h2>

          <!-- form for added a new user -->
          <form class="d-flex flex-column justify-content-around m-2 p-2 card" action="" method="post">
            <label for="">nom :</label>
            <input type="text" name="name" value=""><br>
            <label for="">prenom : </label>
            <input type="text" name="firstName" value=""><br>
            <label for="">âge :</label>
            <input type="text" name="age" value=""><br>
            <label for="">adresse :</label>
            <input type="text" name="adress" value=""><br>
            <input class='btn' type="submit" name="newUser" value="ajouter utilisateur">
          </form>
        </aside>
      </main>
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
      <script src="js/plugins.js"></script>
      <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
