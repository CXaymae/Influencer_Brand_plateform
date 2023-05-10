<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/stylex.css" />
    <!-- bibliothèque d'icônes  "Boxicons", qui fournit des icônes vectorielles pour les développeurs Web-->
    <link
          href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
          rel="stylesheet"
        />
</head>
<body>
    <!--La section de la barre horizontale à droite qui contient des liens -->
        <div class="sidebar">
            <!--La partie concernant le logo à gauche en haut-->
          <div class="logo-details">          
            <img class="logoo" src="img/logo2-r.png">           
          </div>

            <!--La partie concernant les liens dans la barre de coté avec les icons-->
          <ul class="nav-links">
            <li>
              <a href="#" class="active">
                <!-- "bx bx-grid-alt" est une classe CSS qui est utilisée pour afficher une icône de grille dans une page Web. -->
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Tableau de bord</span>
              </a>
            </li>
            
            <li>
              <a href="#contrat">
                <!-- Ajouter une classe "bx bx-book-alt" pour utiliser l'icône "book-alt" depuis la bibliothèque d'icônes "Boxicons" -->
                <i class="bx bx-book-alt"></i>
                <span class="links_name">contrats</span>
              </a>
            </li>
            <li>
              <a href="#msg">
                <i class="bx bx-message" ></i>
                <!-- "links_name" indiquer les différents liens vers d'autres pages -->
                <span class="links_name">Messages</span>
              </a>
            </li>
            <!--La partie qui me permet de déconnexionner de Tableau de bord-->
            <li class="log_out">
              <a href="code1.php">
                <!-- la classe bx bx-log-out l'icon pour symboliser le déconnexion -->
                <i class="bx bx-log-out"></i>
                <!-- la classe links_name pour indiquer le nom significatif associé à lien -->
                <span class="links_name">Déconnexion</span>
              </a>
            </li>
          </ul>
        </div>
        <!--La partie qui me permet de visualiser l'interface de tableau de bord-->
        <section class="home-section">
          <nav>
            <div class="sidebar-button">
              <!-- styliser un bouton qui ouvre la barre latérale -->
              <i class="bx bx-menu sidebarBtn"></i>
              <span class="dashboard">Tableau de bord</span>
            </div>
            <!--Barre de recherche-->
            <div class="search-box">
              <input type="text" placeholder="Recherche..." />
              <i class="bx bx-search"></i>
            </div>
          </nav>
    
          <!-- section reserver pour le contenu général de l'acceuil du tableau de bord -->
          <div class="home-content">
            <!-- styliser un groupe d'éléments sous forme de boîtes -->
            <div class="overview-boxes">
              <div class="box">
                <!-- styliser une partie de la mise en page, en général à droite de la page -->
                <div class="right-side">
                    <!-- espace d'affichage des donnés actuelles des inflluenceurs incrits dans la plateforme -->
                  <div class="box-topic">Influenceurs inscrits</div>
                  <!--  styliser un élément qui sert d'indicateur visue -->
                  <div class="indicator">
                    <i class="bx bx-up-arrow-alt"></i>

                  <?php 
                  include 'config.php'; // inclusion du fichier de configuration contenant les informations de connexion à la base de données
                 $dash_category_query = "SELECT * from user_form";
                 // requête SQL pour récupérer toutes les lignes de la table 'user_form' (pour stocker les informations saisies via le formilaire par l'utilisateur)
                 //$dash_category_query_run est une variable qui stocke le résultat de l'exécution de la requête SQL $dash_category_query à l'aide de la fonction mysqli_query()
                 $dash_category_query_run = mysqli_query($conn ,$dash_category_query);
                 // exécution de la requête SQL avec la fonction 'mysqli_query()'
                 if($category_total= mysqli_num_rows($dash_category_query_run))
                 // vérification si la requête a retourné des résultats, en utilisant la fonction 'mysqli_num_rows()'
                 {
                   echo '<h3>'.$category_total.'</h3>';
                 // affichage du nombre de lignes retournées concernant le nombre total des catégories dans un élément de titre
                 }
                 else 
                 // affichage d'un message d'erreur si aucune ligne n'a été retournée
                   echo '<h3>no data</h3>';
                 ?>
                </div>
                </div>
              </div>

              <div class="box">
                <div class="right-side">
                    <!-- la classe box-topic pour indiquer le contenu dans la surfface reservée -->
                  <div class="box-topic">Marques inscrites</div>
                   <!-- un élément de div avec une classe pour afficher un indicateur -->
                  <div class="indicator">
                    <!-- une icône flèche en haut pour afficher la tendance de l'indicateur -->
                    <i class="bx bx-up-arrow-alt"></i>
                  <?php 
                  include 'config.php';
                 $dash_marque_query = "SELECT * from marque";
                 $dash_marque_query_run = mysqli_query($conn ,$dash_marque_query);
                 if($marque_total= mysqli_num_rows($dash_marque_query_run))
                 {
                   echo '<h3>'.$marque_total.'</h3>';
                 }
                 else 
                   echo '<h3>no data</h3>';
                 ?>                  
                </div>
                </div>
              </div>

              <!-- section diee à l'affichage de détails de partenariats -->
              <div class="box">
                <div class="right-side">
                  <div class="box-topic">Partenariats effectués</div>
                  <div class="indicator">
                  <!-- "bx bx-up-arrow-alt" icone de flèche vers le haut-->
                    <i class="bx bx-up-arrow-alt"></i>
                  <?php 
                  include 'config.php';
                 $dash_marque_query = "SELECT * from contrat1";
                 $dash_marque_query_run = mysqli_query($conn ,$dash_marque_query);
                 if($marque_total= mysqli_num_rows($dash_marque_query_run))
                 {
                   echo '<h3>'.$marque_total.'</h3>';
                 }
                 else              
                   echo '<h3>no data</h3>';     
                 ?>                  
                </div>
                </div> 
              </div>
            </div>

            <!-- Les "sales-boxes" font référence à un concept de marketing influent qui implique des partenariats entre les influenceurs et les marques -->
            <div class="sales-boxes">
                <!-- l'attribut style pour metre en place decs style de page pour la classe recent-sales box pour modéliser un petit peu des partenariats effecctués comme des ventes-->
             <span> 
                <div  style="margin:3% ; padding:10px; width:100%" class="recent-sales box">
                <div class="title">influenceurs</div>
                <?php
                 // Connexion à la base de données sinon arrêter l'exécution du script PHP en cas d'échec de la connexion à la base de données.
                  $conn = mysqli_connect('localhost','root','','projet',3308) or die('connection failed'); 
                   // Requête SQL pour sélectionner tous les enregistrements dans la table user_form selon l'ordre croissant de id
                  $requete = " SELECT * FROM user_form ORDER BY id ASC";
                   // Exécution de la requête et stockage du résultat dans la variable $result
                  $result = mysqli_query($conn,$requete);
                  if(!$result){
                  echo 'erreur'. mysqli_error();
                  }else{ }
                   // Si la requête a réussi, ne rien faire ici
                  ?>
    
             <!-- section pour afficher les datails des utilisateurs influenceurs -->
             <table>
              <tr>
                 <td>profile</td>
                 <td>nom influenceur</td>
                  <td>age</td>
                    <td>insta</td>
                   <td>fc</td>
                   <td>email</td>
                   <td>suppression</td>      
              </tr>
              <?php while($ligne = mysqli_fetch_array($result) ){?>

                <tr>          
                     <!-- affichage des données des influenceurs -->
                   <td><?php echo "<img class='user-image' src='uploaded_img/". $ligne['image']  . "' alt='User image'>";?></td>
                   <td><?php echo $ligne['name'] ?></td>
                   <td><?php echo $ligne['age'] ?></td>
                   <td><?php echo $ligne['insta'] ?></td>
                   <td><?php echo $ligne['fc'] ?></td>
                   <td><?php echo $ligne['email'] ?></td>
                   <td> 
                          <form method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $ligne['id'] ?>">
                             <input class="suppression" type="submit" name="supprimer" value="Supprimer">     
                          </form>
                    </td>
                 </tr>
                 <?php }?>
                  </table>
                 <?php
                  if(isset($_POST['supprimer'])){
                  $id = $_POST['id']; 
                  // extraire la valeur de cet élément de formulaire à partir du tableau associatif POST et la stocke dans une variable PHP appelée "$id"
                  $requete = "DELETE FROM user_form WHERE id='$id'";
                  $result = mysqli_query($conn,$requete);
                  if(!$result){
                  echo 'erreur'. mysqli_error();
                 }else{ header("location: dash_admin.php"); 
                  //rediriger vers la page d'affichage de données après la suppression 
                }}?></tr>
             </div>
                
             <!-- section pour afficher les détails des marques inscrits sur la plateforme -->
              <div  class="top-sales box">
                <div class="title">les marques</div>
                <?php
                 $conn = mysqli_connect('localhost','root','','projet',3308) or die('connection failed'); 
                 $requete = " SELECT * FROM marque ORDER BY id ASC";
                 $result = mysqli_query($conn,$requete);
                 // Vérification s'il y a une erreur avec la requête SQL
                 if(!$result){
                 echo 'erreur'. mysqli_error();
                 }else{}?>
                        
              <table>
               <tr>
                <!-- afficher les données pour les marques à l'admin -->
                  <td>profile</td>
                  <td>nom marque</td>
                  <td>email</td>
                  <td>Secteur d'activités</td>
                  <td>chiffre d'affaire (en $)</td>
                  <td>supprimer</td>       
               </tr>

               <!-- affichage des informations des marques à partir de la base de donné -->
                 <?php while($ligne = mysqli_fetch_array($result) ){?>
               <tr>
                <td> <?php echo "<img class='user-image' src='uploaded_img/" . $ligne['image']  . "' alt='User image'>";?></td>
                <td><?php echo $ligne['name'] ?></td>
                <td><?php echo $ligne['email'] ?></td>
                <td><?php echo $ligne['SECTEUR'] ?></td>
                <td><?php echo $ligne['chiffre'] ?></td>
                <td> 
                    <form method="post" action="">
                        <!-- Crée un formulaire HTML avec la méthode POST et l'action vide (pour envoyer les données au même fichier)-->
                    <input type="hidden" name="id" value="<?php echo $ligne['id'] ?>">
                        <!-- Crée un champ de formulaire masqué qui stocke l'ID de l'utilisateur qui sera supprimé-->
                     <input class="suppression" type="submit" name="supprimer" value="Supprimer">
                           <!-- Crée un bouton de formulaire pour supprimer l'utilisateur-->
                    </form>
                 </td>
                          </tr>
                 <?php }?>
                          </table>
                 <?php
                  if(isset($_POST['supprimer'])){
                    // Vérifie si le bouton de suppression a été cliqué
                  $id = $_POST['id'];       
                  // Récupère l'ID de l'utilisateur à supprimer à partir du champ de formulaire masqué
                  $requete = "DELETE FROM marque WHERE id='$id'";
                      // Prépare la requête SQL pour supprimer l'utilisateur correspondant dans la table "marque"
                  $result = mysqli_query($conn,$requete);
                  if(!$result){
                  echo 'erreur'. mysqli_error();
                 }else{ header("location: dash_admin.php"); //rediriger vers la page d'affichage de données après la suppression 
                }}?></tr>
              </div>
              <div  id="contrat"  class="recent-sales box">
                <div   class="title">contrats</div>
                <?php
                  $conn = mysqli_connect('localhost','root','','projet',3308) or die('connection failed'); 
                  // La requête SQL pour sélectionner les données de la table contrat1.
                  $requete = " SELECT name1,name2,SERVICE,date,PRIX FROM contrat1 ";
                  $result = mysqli_query($conn,$requete);
                if(!$result){
                 echo 'erreur'. mysqli_error();
                 }else{
                         }?>
                         <!-- section pour afficher les details de contrat pour l'admin -->
                         <table style="margin-left:15%;"  class="sales-details ">
                         <tr>
                             <td >NOM Marque</td>
                             <td  >NOM influenceur </td>
                             <td >Services</td>
                              <td >date</td>
                              <td >prix</td>
                         </tr>
                          <!-- la fonction mysqli_fetch_array() pour extraire chaque ligne de la table et stocker ses valeurs dans la variable $ligne. -->
                         <?php while($ligne = mysqli_fetch_array($result) ){?>               
                          <tr>
                             <td><?php echo $ligne['name1'] ?></td>
                             <td><?php echo $ligne['name2'] ?></td>
                             <td><?php echo $ligne['SERVICE'] ?></td>
                             <td><?php echo $ligne['date'] ?></td>
                             <td><?php echo $ligne['PRIX'] ?></td>                            
                          </tr>
                         <?php }?>
                          </table>           
              </div>

              <!-- spécifier l'id message pour le manipuler uniquement et la classe recent-sales box pour dire qu'il s'agit des intéractions actuelles entre les marques et influenceurs -->
              <div id="msg" class="recent-sales box">
                <div class="title">Messages</div>
                <?php
                  $conn = mysqli_connect('localhost','root','','projet',3308) or die('connection failed'); 
                  $requete = " SELECT * FROM contact ";
                  $result = mysqli_query($conn,$requete);
                if(!$result){
                 echo 'erreur'. mysqli_error();
                 }else{
                         }?>             
                         <table style="margin-left:25%;" class="sales-details ">
                         <!-- la partie de header de la table -->
                         <tr>
                             <td >nom</td>
                             <td >email</td>
                             <td>Messages</td>                                                   
                         </tr>
                         <?php while($ligne = mysqli_fetch_array($result) ){?>                     
                          <tr>
                             <td><?php echo $ligne['name'] ?></td>
                             <td><?php echo $ligne['email'] ?></td>
                             <td><?php echo $ligne['msg'] ?></td></tr>                                                       
                         <?php }?>
                     </table>               
              </div>
            </span>
            </div>
          </div>
        </section>
    
        <script>
                // Ce code récupère deux éléments du document HTML par leur classe
                // Sélectionner l'élément avec la classe "sidebar" dans le DOM (Document Object Model) et le stocker dans une variable nommée "sidebar", pour pouvoir l'utiliser dans le script JavaScript 
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
        // La fonction suivante s'exécute lorsqu'on clique sur le bouton de la sidebar
        sidebarBtn.onclick = function () {
        // Toggle la classe "active" de la sidebar pour la rendre visible ou non
        sidebar.classList.toggle("active");
        // Si la sidebar a la classe "active"
        if (sidebar.classList.contains("active")) {
        // Remplace l'icône du menu par une flèche pointant vers la droite
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        // Si la sidebar n'a pas la classe "active"
        } else {
        // Remplace l'icône de la flèche par l'icône du menu
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
        }
        </script>
</body>
</html>