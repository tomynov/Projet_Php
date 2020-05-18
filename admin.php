<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Resume - Start Bootstrap Theme</title>

<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

<link href="css/resume.min.css" rel="stylesheet">

</head>
<?php include("inc/header.inc.php"); ?>

<?php include("inc/data.inc.php"); ?>


<?php
    if (!empty($_POST)) {
      $_POST["title"] = htmlentities($_POST["title"], ENT_QUOTES);
      $_POST["texte"] = htmlentities($_POST["texte"], ENT_QUOTES);
  
      $requeteSQL = "INSERT INTO experiences (title, texte)";
      $requeteSQL .= " VALUE ('$_POST[title]', '$_POST[texte]')";
      $result = $pdo->exec($requeteSQL);
      echo $result . ' experiences a été enregistrée<br>';
    }
?>

 <form action="index.php#experience" method="post" target="_blanck">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="admin">
      <div class="w-100">
        <h2 class="mb-5">Administration</h2>
          <div class="starter-template">  
            <form method="POST" action="" enctype='multipart/form-data'>
                <div class="form-group">
                    <label for="title">Titre de l'experience</label>
                    <input type="texte" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="texte">Texte de l'experience</label>
                    <textarea rows="10" class="form-control" id="texte" name="texte"></textarea>
                </div>
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
      </div>
    </section>
  </form>

