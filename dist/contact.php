
<?php
  require('includes/send_email.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css">
   
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:300,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
    
    <title>Dani Dantas | Portfolio</title>
  </head>

  <body id="contact-pg">
  <div class="overlay"></div>
    <header>
      <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
      </div>
      <nav class="menu">
        <div class="menu-branding"><div class="portrait"></div></div>
        <ul class="menu-nav">
          <li class="nav-item current">
            <a href="index.html" class="nav-link"> Home </a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link"> About Me </a>
          </li>
          <li class="nav-item">
            <a href="work.html" class="nav-link"> My Work </a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link"> How To Reach Me </a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="logo-bg"></div>
      <img src="img/logo_d.png" alt="Dani Dantas Logo" id="logo" />
    <main id="contact">

      <h1 class="lg-heading">Contact <span class="text-secondary">Me</span></h1>
      
      <div class="container">
      <!-- ALERT -->
      <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>">
              <?php echo $msg; ?>
            </div>
          <?php endif; ?>
         
          <form class="contact-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
              </div>
              <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="What do you want to talk about?" class="form-control" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
              </div>
              <div class="form-group">
                <label for="msg">Message</label>
                <textarea id="msg" name="message" class="form-control">
                <?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
              </div>
                <button type="submit" name="submit" class="btn-btn"><i class="fas fa-paper-plane"></i>Send</button>
          </form>
      </div>
      
    </main>
    <footer id="main-footer">
    <div class="icons">
        <a href="https://www.linkedin.com/in/dantasdaniela/">
          <i class="fab fa-linkedin fa-2x"></i>
        </a>
        <a href="https://github.com/danifdantas?tab=repositories">
          <i class="fab fa-github fa-2x"></i>
        </a>
      </div>
      <p> &copy; Dani Dantas 2018</p>
      
    </footer>
    <script src="js/main.js"></script>
  </body>
</html>
