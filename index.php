    <?php 
    include_once './src/header.inc.php';
    ?>
<body>
    <header>
        <h1>PHP - articles and post</h1>
    </header>
    <picture>
        <source srcset="./asset/cover.png"
                media="(orientation: portrait)">
        <img src="./asset/cover.png" alt="cover">
    </picture>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?= $_date_php ?>
    
    </h2>
            <p>
           

                Mise à jour PHP <?= $_modif_php?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
      
        <!--itération avec la bdd -->
        <?php
            include_once './src/connect.inc.php'
        ?>
    
    <!--
    itération avec la bdd 
    -->
    <article>
        <h2>
            <a href="#">
            Le PHP</a>
            <!-- 
                la méthode strip_tags() permet de filtrer les caractère 
            illégaux
        -->
        </h2>
        <p>
            PHP: Hypertext Preprocessor, plus connu sous son sigle PHP, est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage       

        </p>
        <time datetime="2022-10-14 12:28:09">
            Date de modification : 2022-10-14 12:28:09
        </time>
        <span class="material-symbols-outlined" aria-hidden="true">
            thumb_up
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            thumb_down_off
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            favorite
        </span>
        <span class="material-symbols-outlined" aria-hidden="true">
            comment
        </span>


    </article>
    
 
    
    <!--end -->
    <nav>
        <a class="button" href="search.php">
            Rechercher les articles
        </a>
     
      

    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="2022-12-15">15/12/2022</time></p>
    </footer>
   
</body>
</html>