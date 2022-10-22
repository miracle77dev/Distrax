<?php 
$offre=new viewProduit($connexion);
$meilleur=new viewProduit($connexion);
$smart=new viewProduit($connexion);
$montre=new viewProduit($connexion);
$photo=new viewProduit($connexion);
$mode=new viewProduit($connexion);
$kene=new viewProduit($connexion);
$plusVue=new viewProduit($connexion);
$mieuxNote=new viewProduit($connexion);
$mieuxNote2=new viewProduit($connexion);
$mieuxNote3=new viewProduit($connexion);
$imageCommentee=new viewProduit($connexion);
$offre=$offre->offreSpeciale(5);
$meilleur=$meilleur->offreSpeciale(11);
$smart=$smart->offreSpeciale(12);
$montre=$montre->offreSpeciale(13);
$photo=$photo->offreSpeciale(14);
$mode=$mode->offreSpeciale(15);
$kene=$kene->offreSpeciale(6);
$pv=$plusVue->offreSpeciale(3);
$ic=$imageCommentee->offreSpeciale(7);
$mieuxnoteg=$mieuxNote->offreSpeciale(16);//Mieux noté gauche
$mieuxnotem=$mieuxNote2->offreSpeciale(18);// Mieux noté milieu
$mieuxnoted=$mieuxNote3->offreSpeciale(17);// Mieux noté droite
?>

