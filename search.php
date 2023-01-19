<?php 
    include_once "./src/header.inc.php";
?>
<!-- formulaire de recherche-->
<main>
<div class="form" role="region">
    <fieldset>
        <legend>Rechercher un article</legend>
            <?php 
                //connexion à la bdd
                $bdd = new PDO('mysql:host=localhost;dbname=post;charset=utf8','andy','');
    $_article = $bdd->query('SELECT titre, contenu, date_modification FROM article ORDER BY id ASC LIMIT 1');
    //tester la recherche
    if(isset($_GET['query']) AND !empty($_GET['query'])){
        $_query = htmlspecialchars($_GET['query']);
        $_article = $bdd->query('SELECT titre, contenu, date_modification FROM article WHERE titre LIKE "%'.$_query.'%" ORDER BY id DESC');}
            ?>                    
            <form action="" method="get"><!-- get -->
                <label for="titre">Faîtes votre recherche</label>
                    <input type="search" name="query" placeholder="Recherche..." autofocus>
                    <input type="submit" value="Envoyer">
            </form>  
                
                
        </fieldset>
        </div>

        
        <!-- article  -->
                <!-- condition and iteration -->
        <?php if($_article->rowCount() > 0){?>

<article>
    <?php while($data = $_article->fetch()){?>

    <h2>
        <?= $data['titre']?>
    </h2>
    <p>
        <?= $data["contenu"]?><br>
        <time datetime="<?=$data['date_modification']?>">
            <strong>
                Date de modifgication : 
                <?=$data['date_modification']?>
            </strong>
        </time>
    </p>

        <?php }?>
    <?php }else {?>
            <p class="warning"> Aucun réseultat pour <?= $_query ?>....</p>
    <?php } ?>
 </article>
       <!-- end template --> 
    <nav>
        <a class="button" href="index.php">Revenir aux articles</a>
    </nav>
    </main>
    
