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

    //création d'un objet (instance de class)
    $thibaut = new Humain();
    $thibaut->setCouleursYeux('Marrons');
    $thibaut->setNom('FAUREL');
    $thibaut->setPrenom('Thibaut');



     $françois = new Humain();
     $françois->setCouleursYeux('bleux');
     $françois->setTaille('1m80');
     $françois->setNom('SMITCHEV');
     $françois->setPrenom('François');



     $joel = new Humain();
     $joel->setCouleursCheveux('noirs');
     $joel->setNom('ABRAHAMS');
     $joel->setPrenom('Joël');



     //
    //  echo "<p>La couleur des yeux de thibaut est ".$thibaut->getCouleursYeux().".<br/>";
    //  echo "Joël à les cheveux ".$joel->getCouleursCheveux().".<br/>";
    //  echo "François à les yeux ".$françois->getCouleursYeux()." et mesure ".$françois->getTaille().".</p>";


     /**
    * Part II
    */
     echo "<p>".$françois->parler(null, true)."</p>";
     echo "<p>".$joel->parler()."</p>";

     $joel->setLangue("Russe");

     echo "<p>".$joel->parler(null, true)."</p>";

     $thibaut->setLangue('Russe');
     $thibaut->setLangue('Français');
     $thibaut->setLangue('Anglais');
     $thibaut->setLangue('Espagnol');

     echo "<p>".$thibaut->parler($françois, true)."</p>";

     $françois->ecrire($thibaut, "bonjour");
     $françois->ecrire($thibaut, "Comment vas-tu ?");


     echo $thibaut->displaySMS();

     echo"<p style=margin:50px>";
     $françois->hackSMS($thibaut);
     echo $françois->getSmsHacked();
     echo"</p>";

    ?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
