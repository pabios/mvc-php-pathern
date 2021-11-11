 <?php $title = 'Mon Blog by gabary' ?>
 <?php ob_start(); ?>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
        
        <?php
        while ($donnees = $post->fetch())
        {
        ?>
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($donnees['title']); ?>
                <em>le <?php echo $donnees['date_creation_fr']; ?></em>
            </h3>
            
            <p>
            <?php
            echo nl2br(htmlspecialchars($donnees['content']));
            ?>
            <br />
            <em><a href="./index.php?action=post&id=<?=$donnees['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $post->closeCursor();
        ?>
<?php $content = ob_get_clean() ?>
<?php require ('template.php')  ?>

    