<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include("inc/header.inc.php"); ?>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <?php
          $pdo = new PDO("mysql:host=localhost;dbname=php_projet","root","", array
          (PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $cv = $pdo->query("SELECT * FROM about");
          while ($about = $cv->fetch(PDO::FETCH_OBJ))
          {
        ?>
          
          <h1 class="mb-0">
          <span class="text-primary"><?php echo $about->title . "<br>"; ?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $about->info . "<br>"; ?>
          <a href="mailto:name@email.com">tom.cousdikian@ynov.com</a>
        </div>
        <p class="lead mb-5"><?php echo $about->texte . "<br>"; ?></p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>

        <?php
            echo "<br>";
          }
        ?>

        <!-- <h1 class="mb-0">Tom
          <span class="text-primary">COUSDIKIAN</span>
        </h1>
        <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·
          <a href="mailto:name@email.com">tom.cousdikian@ynov.com</a>
        </div>
        <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
        <div class="social-icons">
          <a href="#">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="#">
            <i class="fab fa-github"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div> -->
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

        <?php
          $pdo = new PDO("mysql:host=localhost;dbname=php_projet","root","", array
          (PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          $result = $pdo->query("SELECT * FROM experiences");
          while ($experiences = $result->fetch(PDO::FETCH_OBJ))
          {
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

          <?php
              echo "<br>";
          }
          ?>

          
        

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Senior Web Developer</h3>
            <div class="subheading mb-3">Intelitec Solutions</div>
            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">March 2013 - Present</span>
          </div>
        </div> -->

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Web Developer</h3>
            <div class="subheading mb-3">Intelitec Solutions</div>
            <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">December 2011 - March 2013</span>
          </div>
        </div> -->

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">Junior Web Designer</h3>
            <div class="subheading mb-3">Shout! Media Productions</div>
            <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">July 2010 - December 2011</span>
          </div>
        </div> -->

        <!-- <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">Web Design Intern</h3>
            <div class="subheading mb-3">Shout! Media Productions</div>
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">September 2008 - June 2010</span>
          </div>
        </div> -->

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0">University of Colorado Boulder</h3>
            <div class="subheading mb-3">Bachelor of Science</div>
            <div>Computer Science - Web Development Track</div>
            <p>GPA: 3.23</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2006 - May 2010</span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0">James Buchanan High School</h3>
            <div class="subheading mb-3">Technology Magnet Program</div>
            <p>GPA: 3.56</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">August 2002 - May 2006</span>
          </div>
        </div>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Workflow</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            Mobile-First, Responsive Design</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Browser Testing &amp; Debugging</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Cross Functional Teams</li>
          <li>
            <i class="fa-li fa fa-check"></i>
            Agile Development &amp; Scrum</li>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Interests</h2>
        <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
        <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Awards &amp; Certifications</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Google Analytics Certified Developer</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            Mobile Web Specialist - Google Certification</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2009</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            2<sup>nd</sup>
            Place - University of Colorado Boulder - Emerging Tech Competition 2008</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            1<sup>st</sup>
            Place - James Buchanan High School - Hackathon 2006</li>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            3<sup>rd</sup>
            Place - James Buchanan High School - Hackathon 2005</li>
        </ul>
      </div>
    </section>

    <?php
    if (!empty($_POST)) {
      $_POST["title"] = htmlentities($_POST["title"], ENT_QUOTES);
      $_POST["texte"] = htmlentities($_POST["texte"], ENT_QUOTES);
  
      $requeteSQL = "INSERT INTO experiences (title, texte)";
      $requeteSQL .= " VALUE ('$_POST[title]', '$_POST[texte]')";
      //echo $requeteSQL;
      $result = $pdo->exec($requeteSQL);
      echo $result . ' experiences a été enregistrée<br>';
    }
    ?>
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

                <!-- <div class="form-group">
                    <input type="file" class="form-control-file" id="img" name="img[]">
                </div> -->

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
      </div>
    </section>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="compte">
      <div class="w-100">
        <h2 class="mb-5">Mon Compte</h2>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, cupiditate nobis. Accusantium accusamus veniam rem fugit quaerat? Odio quo sit voluptas aperiam, quia modi fugit ullam eos? Ex, ullam nam?</p>
      <!-- nom -->
      <!-- prenom -->
      <!-- mail -->
      <!-- mdp -->
      <!-- mdp conf -->

      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
