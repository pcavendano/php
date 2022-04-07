<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <meta content="" property="og:title">
  <meta content="" property="og:type">
  <meta content="" property="og:url">
  <meta content="" property="og:image">

  <link href="site.webmanifest" rel="manifest">
  <link href="icon.png" rel="apple-touch-icon">
  <!-- Place favicon.ico in the root directory -->

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">

  <meta content="#fafafa" name="theme-color">
</head>

<body>
<header>
  <nav>
    <ul>
      <li>
        <a href=""> Home </a>
      </li>
      <li>
        <ul>
          <li>
            <a href=""> <a href="#"> Exercice 1</a></a>
          </li>
          <li>
            <a href="#"><a href="#"> Exercice 2</a></a>
          </li>
          <li>
            <a href="#"> <a href="#"> Exercice 3</a> </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><a href="#"> Exercice 4</a> </a>
      </li>
    </ul>
  </nav>
</header>
<!-- Add your site or application content here -->
<p>Exercices Prtaiques de PHP</p>
<p></p>
<?php
echo "HOLA";
?>
<p>Il existe deux facons de declarer un tableau en php</p>
<p>Voici les options</p>
<?php
echo '$langages = array("HTML","JAVASCRIPT","PHP");';
echo "ou";
echo '$langages = ["HTML","JAVASCRIPT","PHP"];';
$langages = ["HTML", "JAVASCRIPT", "PHP"]
?>
<p>Un tableau vide est initialise par array() ou []
</p>
<?php
echo '$liste = array()';
echo '$liste = []';
?>
<p>Pour obtenrir la taille dun tableau on utilise la fonction count</p>
<p>
  <?php
  echo '$langages = array("HTML","JAVASCRIPT","PHP");';
  ?>
</p>
<p>
  <?php
  echo "la taille du tableau est" . count($langages);
  ?>
</p>
<p>Pour retourner la valeur a lindice 0</p>
<p>
  <?php
  echo "la valeur entrepose a la psoition 0 est " . $langages[0] . ".";
  ?>
</p>


<p>Ces trois commandes initialisent la gestion derreurs en php</p>
<p>init_set('display_errors',false) - autorise ou pas laffichage a lecran</p>
<p>init_set('log_errors',true) - autorise ou pas lecriture des messages derreur</p>
<p>init_set('error_log',journal.log) - indique le chemin du fichier trace des erreurs si le parametre 'log_errors est
  positionne a true</p>
<p>echo "<br>Debut du script <br>"</p>
<p>echo "<br>test".$test."<br>"</p>
<p>var_dump($test);</p>
<p>echo "<br>Fin du script<br>"</p>

<p>Functions en PHP</p>
<p>Exemple de function en PHP</p>
<p>function calculerVolumeCylindre($rayon, $hauteur){
  $pi = 3.1416;
  $volume = $pi * $rayon** 2 * $hauteur;
  return $volume;
  }
</p>
<p>Exemple de procedure</p>
<?php
function afficherPiedDePage($societe, $annee)
{
  ?>
  <footer>
    <p>&copy;<?php echo $societe . " " . $annee; ?></p>
  </footer>
  <?php
}

?>
</p>


<p>Appels de sous-programmes</p>
<p>
  $resultat = calculerVolumeCylindre(4,1);
  ou encore
  echo calculerValeurCylindre(4,1)." m3;
</p>

<h3>Porte de variables</h3>
<p>
  Portée des variables d'une fonction :globale<br>
  Pour utiliser une variable externe dans une fonction,
  il faut déclarer cette variable dans cette fonction,<br> avec le mot clé global.<br>
  Exemple :
  $tps = 0.05;
  $tvq = 0.09975;
  function calculerMontantTTC($montantHT, $avecTPS=true, $avecTVQ=true) {
  global $tps;
  global $tvq;
  ...
  return $montantTTC;
  }
  echo calculerMontantTTC(1000); // affiche 1149.75
</p>


<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function () {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'anonymizeIp', true);
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script async src="https://www.google-analytics.com/analytics.js"></script>
</body>

</html>
