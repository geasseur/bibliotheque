<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>compte <?php echo $displayUser->getFirstName()." ". $displayUser->getName(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class='container'>
      <header>
        <h1 class='m-3' style='text-align :center'>Bibliothèque Staline</h1>
      </header>
      <main>
        <section class='m-3'>
        <?php
        if (!empty($displayUser)) { ?>
            <article class="card d-flex flex-column justify-content-around mt-3">
              <h3 style='text-align:center'><?php echo $displayUser->getFirstName() ." ". $displayUser->getName() ; ?></h3>
              <div class="d-flex flex-column align-items-center">
                <p>adresse : <?php echo $displayUser->getAdress(); ?></p>
                <p>age : <?php echo $displayUser->getAge(); ?></p>
                <p>inscrit le  : <?php echo $displayUser->getDateSubscribe(); ?></p>

                <h3>livre emprunté : </h3>
                <?php if (!empty($displayBooks)):
                  foreach ($displayBooks as $key => $value) { ?>
                    <article class="card p-3 m-2">
                      <p>titre : <?php echo $value['title']; ?></p>
                      <p>auteur : <?php echo $value['author']; ?></p>
                      <p>doit être retourné le : <?php echo $value['dateReturn']; ?></p>
                      <p>catégorie : <?php echo $value['category']; ?></p>
                    </article>
                <?php }
                    endif; ?>
              </div>
            </article>
        <?php } ?>
        </section>
        <form class="" action="../index.php" method="post">
          <input class='btn btn-primary' type="submit" name="" value="retour">
        </form>
      </main>
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
      <script src="../js/plugins.js"></script>
      <script src="../js/main.js"></script>

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
