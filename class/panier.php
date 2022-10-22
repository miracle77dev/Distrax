 <?php
 /**
  * Gestion du panier keneshi
  */
 class Panier
 {
 	
 	function __construct()
 	{
 		if (session_status()==PHP_SESSION_NONE) {
 			session_start();
 		}
 		if (!isset($_SESSION['panier'])) {
 			$_SESSION['panier']=[];
 		}
 	}
 	public function ajouteProduit($idProduit){
        if (isset($_SESSION['panier'][$idProduit])) {
        	$_SESSION['panier'][$idProduit]++;
          echo 'Produit ajouter '.$_SESSION['panier'][$idProduit].'x au panier';
        }
        else{
              $_SESSION['panier'][$idProduit]=1; 
              echo 'Produit ajouté au panier.';
        }
 	}
 	public function retirerProduit($idProduit){
          if(isset($_SESSION['panier'][$idProduit])){
          	unset($_SESSION['panier'][$idProduit]);
          echo 'Cet article à été retirer du panier';
          }
          else{
            echo 'Dsl, vous ne pouvez pas retirer un produit qui n\'existe pas.';
          }
 	}
 	public function prixTotalPanier(){
 		if (!empty($_SESSION['panier']['idProduit'])) {
 			$total=0;
 			foreach ($_SESSION['panier']['idProduit'] as $key=>$value) {
 				$total+=$_SESSION['panier']['idProduit'][$key]*$_SESSION['panier']['qte'][$key];
 			}
 			return $total;
 		}
 	}
 }
