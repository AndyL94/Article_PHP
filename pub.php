
<?php 
include_once './src/header.inc.php';
include_once './src/connect_bdd.inc.php';
include_once './src/traitement.inc.php';
?>
<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
<main>
<div class="form" role="region">
    <fieldset>
        <legend>Poster vos publications</legend>
                                
            <form action="" method="post"><!-- get -->
                <label for="titre">Ajoutez un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus="true">
                    <label for="contenu">Insérer un contenu</label>
                    <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
                    <input type="submit" value="Envoyer">
            </form>
                
               
        </fieldset>
        

</div>
      
</main>
    
<footer>
        <p>&copy; - MIT - 2023-01-05</p>
</footer>
</html>