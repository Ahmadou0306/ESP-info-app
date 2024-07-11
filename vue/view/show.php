<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vue\style\index.css">
    <link rel="stylesheet" href="vue\style\footer.css">
    <title>ESP Article</title>
</head>
<body>
    <h1>ESP information</h1>
    <nav >
        <ul>
            
           <?php
                foreach ($categories as $categ) {
                    if ($categ->getId() == $activeCateg) {
                        echo "<li><a href='#' class='actuelle categorie " .$categ->getId()."'>".$categ->getLibelle()."</a></li>";

                    }else{
                        echo "<li><a href=index.php?action=afficher_categorie&id=".$categ->getId()." class='categorie " .$categ->getId()."'>".$categ->getLibelle()."</a></li>";
                    }
                }
           ?>
           
        </ul>
    </nav>
    <?php
        foreach($articles as $article) {
            echo "
            <div class='article ".$article->getCategorie()."'>
                <h2 class='titreArticle'>".$article->getTitre()."</h2>
                <p class='contenuArticle'>".$article->getContenu()."</p>
                <p class='dateCreationArticle'>".$article->getDateCreation()."</p>
                <p class='dateModificationArticle'>".$article->getdDateModification()."</p> 
            </div>";
        }

    ?>
</body>
<?php 
    include 'footer.php'
?>
</html>