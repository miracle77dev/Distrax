      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm">Distrax africa - <?=isset($_SESSION['NomMarchand'])?$_SESSION['NomMarchand']:'' ?> </div>
              <!-- Language &amp; Currency wrapper -->
              
            </div>
            
            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Joindre DistraX: +2250.749.399.436</span>
              <ul class="links">
                <li class="hidden-xs"><a title="Help Center" href="#"><span>Centre d'aide</span></a></li>
                <li><a title="Store Locator" href="#"><span>Mon business</span></a></li>
                <li><a title="Checkout" href="#"><span>Mois en cours</span></a></li>
                <li>
                  <div class="dropdown"><a class="current-open " onclick="Controle()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>Mon Compte</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu cache" role="menu" style="display:none;">
                      <li><a href="categorie.php">Ajouter une catégorie</a></li>
                      <li><a href="add_produit.php">Ajouter un produit</a></li>
                      <li><a href="about_us.php">Traitement</a></li>
                      <li><a href="account_page.php">Analyste</a></li>
                      <li class="divider"></li>
                      <li><a href="../deconnect.php">Se déconnecter</a></li>
                    </ul>
                  </div>

                </li>
               
              </ul>
            </div>
            
          </div>
        </div>
      </div>