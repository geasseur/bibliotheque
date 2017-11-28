<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <header>
        <h1>Bibliothèque Staline</h1>
      </header>
      <main>
        <section>
          <!-- form to added a new book -->
          <form class="" action="" method="post">

          </form>
          <section>
            <!-- form to sort book's list -->
            <form class="" action="" method="post">

            </form>
            <!-- book's list -->
            <section>
            <?php
            if (!empty($displayBooks)) {
              foreach ($displayBooks as $key => $value) { ?>
                <article class="">
                  <h3><?php echo $value['titre']; ?></h3>
                  <p><?php echo $value['auteur']; ?></p>
                  <p><?php echo $value['dateParution'] ?></p>
                </article>
            <?php } ?>
            </section>
          </section>
        </section>
        <!-- section user -->
        <aside class="">
          <!-- section to list users -->
          <section>
            <?php
            if (!empty($displayUsers)) {
              foreach ($displayUsers as $key => $value) { ?>
                <article class="">
                  <h3><?php echo $value['prenom']; ?></h3>
                  <p><?php echo $value['nom']; ?></p>
                  <p><?php echo $value['adresse']; ?></p>
                </article>
            <?php } ?>
          </section>
          <!-- form for added a new user -->
          <form class="" action="" method="post">

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
