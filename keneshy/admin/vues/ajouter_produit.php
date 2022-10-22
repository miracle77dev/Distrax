
<!DOCTYPE html>
<html>
<head>
   <title>Ajouter produit: reservé aux administrateurs</title>
   <meta charset="utf-8">
</head>
<style type="text/css">
   #contain{
      position: relative;
      margin:  auto;
      width: 60%;

  }
  .sc,.sc2,.sc3{
      display: none;
  }
  #produit_content table{
      display: inline-block;
  }
  #info,#admin{
    margin-right: inherit;
    margin-left: inherit;
    width: 100%;
    height: 35px;
    background:#a9ebfd; 
    text-align: center;
    line-height: 4px;
  }
  #info p,#admin p{
    color: #0fca04;
    font-family: verdana;
    font-weight: bold;
    display: inline-block;
  }
#info img{
    position: absolute;
    right: 20px;
    width: 20px;
    top: 7px;
    border-radius: 80%;
  }
#info img:hover{
    border: 1px black solid;
    cursor: pointer;
}
</style>
<body>
    <div id="contain">
     <div id="admin">
        <p>Bienvenue sur l'espace d'administration <strong>Keneshy.com</strong> </p><br>
    </div>
<?php if (isset($_SESSION['info']['texte'] )): ?>
    <div id="info">
        <p>Le produit à bien été enregistré.</p><img src="images/delete.png">
    </div>
<?php endif;?>
        <div>
            <form method="POST" action="ajouter_produit.php" enctype="multipart/form-data">
             <fieldset>
              <legend>Emplacement du produit sur le site</legend>
              <div>
               <table>
                <tr>
                    <td><label>1-Slider</label></td>
                    <td><input type="radio" name="choix" value="1"><br></td>
                </tr>
                <tr>
                 <td><label>2-nouvel arrivage</label></td>
                 <td><input type="radio" name="choix" value="2"><br></td>
             </tr>
             <tr>
                 <td><label>3-plus vendu</label></td>
                 <td><input type="radio" name="choix" value="3"><br></td>
             </tr>
             <tr>
                 <td><label>4-Bannière gauche</label></td>
                 <td><input type="radio" name="choix" value="4"><br></td>
             </tr>
             <tr>
                 <td><label>5-Offre spéciale</label></td>
                 <td><input type="radio" name="choix" value="5"><br></td>
             </tr>
             <tr>
                 <td><label>6-Kene du jour</label></td>
                 <td><input type="radio" name="choix" value="6"><br></td>
             </tr>
             <tr>
                 <td><label>7-Image commentée</label></td>
                 <td><input type="radio" name="choix" value="7"><br></td>
             </tr>
             <tr>
                 <td><label>8-Dernière actualité</label></td>
                 <td><input type="radio" name="choix" value="8"><br></td>
             </tr>
             <tr>
                 <td><label>9-Partenaire</label></td>
                 <td><input type="radio" name="choix" value="9"></td>
             </tr>
             <td><label>10-Image hover</label></td>
             <td><input type="radio" name="choix" value="10"></td>
         </tr>
         <tr>
             <td><label>Meilleur vente: </label></td>
             <td>
                <label>11-ordinateur</label><input type="radio" name="choix" value="11">
                <label>12-smartphone</label><input type="radio" name="choix" value="12">
                <label>13-montre</label><input type="radio" name="choix" value="13">
                <label>14-photo &amp; camera</label><input type="radio" name="choix" value="14">
                <label>15-mode &amp; style</label><input type="radio" name="choix" value="15">
            </td>
        </tr>
        <tr>
            <td><label>Mieux notés</label></td>
            <td>
                <label>16-gauche</label><input type="radio" name="choix" value="16">
                <label>17-droite</label><input type="radio" name="choix" value="17">
                <label>18-milieu</label><input type="radio" name="choix" value="18">
            </td>
        </tr>
    </table>
</div>
</fieldset>
<div>
    <fieldset><legend>Catégorie</legend>
        <table>
            <tr>
                <td>Choisir la catégorie</td>
                <td>
                 <ul>
                  <select name="categorie" id="choix_categorie">
                   <option value="">cliquez pour choisir</option>
                   <option value="livre_et_document">Livre &amp; document</option>
                   <option value="ordinateur">ordinateur</option>
                   <option value="smartphone">smartphone</option>
                   <option value="electronique">Electronique</option>
                   <option value="maison_et_cuisine">Maison &amp; Cuisine</option>
                   <option value="immobilier">Immobilier</option>
                   <option value="mode_et_fashion">Mode &amp; Fashion</option>
                   <option value="produit_exceptionnel">Produit Exceptionnel</option>
                   <option value="alimentation">Alimentattion</option>
                   <option value="autre">Autre</option>
               </select>
           </ul>
       </td>
   </tr>
</table>
</fieldset>
</div>
<div id="sc">
    <fieldset><legend>Sous categorie</legend>

        <p>Choisir la sous-catégorie</p> 

        <ul class="sc">
          <select name="sous_categorie1" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="LIVRE &amp; DOCUMENT">
            <option value="science">Science et technologie</option>
            <option value="cuisine">Cuisine</option>
            <option value="magasine">Magasine</option>
            <option value="developpement_formation">Developpement personnel &amp; Formation</option>
            <option value="roman">Roman</option>
            </optgroup>
        </select>
    </ul>
    <!-- Sous categorie ordinateur et multimedia -->
    <ul class="sc2">
        <select name="sous_categorie2" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="MULTIMEDIA &amp; CONNECTION">
                <option value="imprimante_et_photocopieuse">Imprimante &amp; photocopieuse</option>
                <option value="wifi_et_routeur">WIFI &amp; Routeur</option>  
                <option value="outils_connexion">Outils de connexion</option>  
                <option value="photo_projecteur">Appareil photo &amp; Projecteur</option>  
            </optgroup>
            <optgroup label="ORDINATEUR">
                <option value="ordinateur">Ordinateur Complet</option>  
                <option value="gammer">Gammer</option>
                <option value="pc">Pc portable</option>  
            </optgroup>
            <optgroup label="MARQUE">
                <option value="hp">HP</option>
                <option value="toshiba">TOSHIBA</option>   
                <option value="viao">VIAO</option>   
                <option value="dell">DELL</option>   
                <option value="apple">APPLE</option>   
                <option value="acer">ACER</option>   
                <option value="lenovo">LENOVO</option>   
            </optgroup>
            <optgroup label="ACCESSOIRE">
                <option value="ecran">Ecran</option>
                <option value="uc">Unité Centrale</option>  
                <option value="disque_dur">Disque dur</option>  
                <option value="ram">Ram</option>  
                <option value="webcam">Webcam</option>  
                <option value="autre">Autre</option>  
            </optgroup>
        </select>
    </ul>
    <!-- Sous categorie smartphone -->
    <ul class="sc3">
        <select name="sous_categorie3" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="SMARTPHONE">
                <option value="samsung">Samsung</option>  
                <option value="nokia">Nokia</option>
                <option value="infinix">Infinx</option>  
                <option value="huawei">Huawei</option>  
                <option value="tecno">Tecno</option>  
                <option value="apple">Apple</option>  
                <option value="itel">Itel</option>  
                <option value="toutes_les_marques">Toutes les marques</option>  
            </optgroup>
            <optgroup label="ACCESSOIRE">
                <option value="ecran">Ecran</option>
                <option value="carte_memoire">Carte Memoire</option>  
                <option value="batterie">Batterie</option>  
                <option value="chargeur">Chargeur</option>  
                <option value="ecouteur">Ecouteur</option>  
                <option value="coque">Coques</option>  
            </optgroup>
        </select>
    </ul>
<!-- Sous categorie electronique -->
    <ul class="sc4">
        <select name="sous_categorie4" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="ELECTROMENAGERE">
                <option value="congelateur_et_refrigerateur">Congelateur &amp; Réfrigérateur</option>
                <option value="climatiseur_et_ventilateur">Climatiseur &amp; Ventilateur</option>  
                <option value="gaziniere">Gazinière</option>  
                <option value="blanchisserie">Blanchisserie</option>  
            </optgroup>
            <optgroup label="VIDEO &amp; AUDIO">
                <option value="dvd_video">DVD &amp; Vidéo</option>  
                <option value="tv_led_et_plasma">Tv led &amp; Plasma</option>
                <option value="gaziniere">Hi-FI</option>  
            </optgroup>
            <optgroup label="HIGH-TECH">
                <option value="maison_connectee">Maison connectée</option>
                <option value="objet_connecte">Objet connecté</option>   
            </optgroup>
            <optgroup label="JEU VIDEO">
                <option value="congelateur_et_refrigerateur">Congelateur &amp; Réfrigérateur</option>
                <option value="climatiseur_et_ventilateur">Climatiseur &amp; Ventilateur</option>  
                <option value="gaziniere">Gazinière</option>  
                <option value="blanchisserie">Blanchisserie</option>  
            </optgroup>
        </select>
    </ul>
    <ul class="sc5">
        <select name="sous_categorie5" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <option value="samsung">samsung</option>
            <option value="iphone">iphone</option>
            <option value="tecno">tecno5</option>
        </select>
    </ul>
    <!-- sous categorie Immobilier -->
    <ul class="sc6">
        <select name="sous_categorie6" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="TERRAIN">
            <option value="terrain_a_vendre">Terrain a vendre</option>
            <option value="terrain_a_louer">Terrain à loué</option>
            <option value="lot">Lot disponible</option>
            <option value="lotissement">Lotissement</option>
            <option value="autre">Autre</option>
            </optgroup>
            <optgroup label="APPARTEMENT">
            <option value="terrain_a_vendre">Maison a vendre</option>
            <option value="terrain_a_louer">Maison à loué</option>
            <option value="lot">Bureau disponible</option>
            <option value="lotissement">Trouver une chambre à l'hotel</option>
            <option value="autre">Autre</option>
            </optgroup>
        </select>
    </ul>
    <!-- sous categorie Mode et fashion -->
    <ul class="sc7">
        <select name="sous_categorie7" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="CHIC MEC">
            <option value="chaussure">Chaussure</option>
            <option value="montre_bracelet_chaine_homme">Montre &amp; Bracelet &amp; Chaine</option>
            <option value="short_polo">Tee-Short &amp; Polo</option>
            <option value="tenue_responsable">Tenue responsable</option>
            <option value="autre">Autre</option>
            </optgroup>
            <optgroup label="CHIC NANA">
            <option value="chaussure">Chaussure</option>
            <option value="montre_bracelet_chaine_femme">Montre &amp; Bracelet &amp; Chaine</option>
            <option value="lingerie">Lingerie</option>
            <option value="sac_a_main">Sac à main</option>
            <option value="dame_responsable">Dame responsable</option>
            <option value="autre">Autre</option>
            </optgroup>
        </select>
    </ul>
     <!-- sous categorie produit exeptionnel -->
    <ul class="sc8">
        <select name="sous_categorie8" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="PRODUIT EXCEPTIONNEL">
            <option value="moyenne">Gamme moyenne</option>
            <option value="standard">Gamme standard</option>
            <option value="haut_niveau">Haut niveau</option>
            </optgroup>
        </select>
    </ul>
     <!-- sous categorie alimentation -->
    <ul class="sc9">
        <select name="sous_categorie9" id="choix_sc">
            <option value="">___Cliquer pour choisir___</option>
            <optgroup label="ALIMENTATION">
            <option value="poisson">Du poisson</option>
            <option value="viande">De la viande</option>
            <option value="viande_de_brousse">De la viande de brousse</option>
            <option value="volaille">De la volaille</option>
            </optgroup>
        </select>
    </ul>
    <ul class="sc10">
        <select name="sous_categorie10" id="choix_sc">
            <option value="autre">Autre</option>
        </select>
    </ul>

</fieldset>
</div>
<div id="produit_content">
    <fieldset><legend>Detail du produit</legend>
        <table>
            <tr>
                <td><label>charger l'image</label></td><td><input type="file" name="image[]" id="img_principale" multiple="multiple"></td>


            </tr>
            <tr>
                <td><label>titre</label></td> <td><input type="text" name="titre"> </td>
            </tr>
            <tr>
                <td><label>prix</label></td> <td><input type="number" name="prix"></td>
            </tr>
            <tr>
                <td><label>reduction</label></td> <td><input type="number" name="reduction" value="0" placeholder="-">%</td>
            </tr>
            <tr>
                <td><label>Description</label></td> <td><textarea name="descrip"  placeholder="Parler de ce produit ici..." required="required"></textarea></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><label>Nouveau</label></td> <td><input type="checkbox" name="nouveau"> </td>
            </tr>
            <tr>
                <td><label>etoile</label></td> <td><input type="number" value="0" name="etoile">/5</td>
            </tr>
        </table>
    </fieldset>
</div>
<div>
    <input type="submit" name="valider">
    <input type="reset" name="reprendre" value="reprendre">
</div>
</form>
</div>
<br>
<div>
    <hr>
    <p>Copyright © 2019 Keneshy. Tout droit réservé.</p>
</div>
</div>
</body>
<script src="vendor/jquery-3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('document').ready(function() {
      var categoriePrincipale=$("#choix_categorie").val();
      if (categoriePrincipale=='') {
        $('#sc').slideUp();
    }
    $('#info img').click(function(){
        $('#info').slideUp();
    })
    $('#choix_categorie').change(function(){
      var categorie=$("#choix_categorie").val();
      if (categorie=='livre_et_document') {
       $('#sc').slideDown();
       $('.sc').fadeIn();
       $('.sc2').fadeOut();
       $('.sc3').fadeOut();
       $('.sc4').fadeOut();
       $('.sc5').fadeOut();
       $('.sc6').fadeOut();
       $('.sc7').fadeOut();
       $('.sc8').fadeOut();
       $('.sc9').fadeOut();
       $('.sc10').fadeOut();
   }
   else if(categorie=='ordinateur'){
      sc=$('#choix_sc').val();
      $('#sc').slideDown();
      $('.sc2').fadeIn();
      $('.sc').fadeOut();
      $('.sc3').fadeOut();
      $('.sc4').fadeOut();
      $('.sc5').fadeOut();
      $('.sc6').fadeOut();
      $('.sc7').fadeOut();
      $('.sc8').fadeOut();
      $('.sc9').fadeOut();
      $('.sc10').fadeOut();

  }
  else if(categorie=='smartphone'){
      sc=$('#choix_sc').val();
      $('#sc').slideDown();
      $('.sc2').fadeOut();
      $('.sc').fadeOut();
      $('.sc3').fadeIn();
      $('.sc4').fadeOut();
      $('.sc5').fadeOut();
      $('.sc6').fadeOut();
      $('.sc7').fadeOut();
      $('.sc8').fadeOut();
      $('.sc9').fadeOut();
      $('.sc10').fadeOut();
  }
  else if(categorie=='electronique'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeIn();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
else if(categorie=='maison_et_cuisine'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeIn();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
else if(categorie=='immobilier'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeIn();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
else if(categorie=='mode_et_fashion'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeIn();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
else if(categorie=='produit_exceptionnel'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeIn();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
else if(categorie=='alimentation'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeIn();
    $('.sc10').fadeOut();
}
else if(categorie=='autre'){
    sc=$('#choix_sc').val();
    $('#sc').slideDown();
    $('.sc2').fadeOut();
    $('.sc').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeIn();
}
else{
    $('.sc').fadeOut();
    $('.sc2').fadeOut();
    $('.sc3').fadeOut();
    $('.sc4').fadeOut();
    $('.sc5').fadeOut();
    $('.sc6').fadeOut();
    $('.sc7').fadeOut();
    $('.sc8').fadeOut();
    $('.sc9').fadeOut();
    $('.sc10').fadeOut();
}
})

})
</script>

</html>