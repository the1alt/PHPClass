<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
      body{
        padding:50px;
      }
    </style>
  </head>
  <body>


    <?php
    /**
    * Fichier d'éxécution de notre application
    * Fichier de test pour l'orienté objet
    */



    include "src/App/Humain.php";
    include "src/App/Produit.php";

    $nintendo64 = new Produit();
    $nintendo64->setId('N64');
    $nintendo64->setTitre('Nintendo 64');
    $nintendo64->setResume('Console de jeux 64 bits');
    $nintendo64->setQuantite(10);
    $nintendo64->setPrix('50€');
    $nintendo64->setTaxe('5€');
    $nintendo64->setCouleurs(['Noir','Bleu', 'Gris']);

    ?>


    <div class="container">
      <?php echo $nintendo64->presentation(); ?>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
