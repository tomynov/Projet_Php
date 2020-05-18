<?php 

    if (!empty($_GET))
    { 
        $reponse = $bdd->query('SELECT * FROM php_projet');
        $donnees = $reponse->fetch();
?>

    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <h3 class="mb-0"><?php echo $experiences->title . "<br>"; ?></h3>
            <p><?php echo $experiences->texte . "<br>"; ?></p>
        </div>
        <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $experiences->date_redaction . "<br>"; ?></span>
        </div>
    </div>

<?php } ?>