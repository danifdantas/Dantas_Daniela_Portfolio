
<?php
var_dump($_POST);

$fields = array(
  'name' => array(
    'type' => 'text',
    'label' => 'Name'
  ),
  'email' => array(
    'type' => 'email',
    'label' => 'Email'
  ),
  // 'phone' => array(
  //   'type' => 'tel',
  //   'label' => 'Phone'
  // ),
  'message' => array(
    'type' => 'textarea',
    'label' => 'Message'
  )
);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--
      <link rel="icon" href="/dist/img/favicon.ico" type="image/x-icon" />
    -->

    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/main.css" />
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Dani Dantas | Portfolio</title>
  </head>

  <body id="bg-image">
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
      <div class="logo-bg"></div>
      <img src="img/logo_d.png" alt="Dani Dantas Logo" id="logo" />
    </header>
    <main>
      <h1 class="lg-heading">Contact <span class="text-secondary">Me</span></h1>
      //TODO 
      <?php if(isset($_GET['status']) && $_GET['status']==='successful'): ?>
    <p>The form was submitted successfully</p>
        <?php endif; ?>

        <?php if(isset($_GET['status']) && $_GET['status']==='error'): ?>
        <p>The form is missing some required fields</p>
        <?php endif; ?>

        <form action="./send_email.php" method="POST">
          <?php foreach ($fields as $field_name => $field_config) : ?> 
          <label for="<?php echo $field_name; ?>"><?php echo $field_config['label']; ?></label>
          <input type="<?php echo $field_config['type']; ?>" id="<?php echo $field_name; ?>" name="<?php echo $field_name; ?>">
        <?php endforeach; ?>
          <button type="submit">Submit</button>
    </form>
    <!-- PHP FORM END -->
      <form action="/my-handling-form-page" method="post">
        <div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" />
        </div>
        <div>
          <label for="mail">E-mail:</label>
          <input type="email" id="mail" name="user_mail" />
        </div>
        <div>
          <label for="msg">Message:</label>
          <textarea id="msg" name="user_message"></textarea>
        </div>
      </form>
    </main>
    <script src="js/main.js"></script>
  </body>
</html>
