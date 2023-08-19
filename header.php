<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="src/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="/src/images/favicon.ico">
    <meta charset="UTF-8" />
  </head>
  <body>
    <section>
      <div class="nav-bar">
        <nav>
          <a href="index.php"
            ><img
              class="logo"
              src="src/images/logo.png"
              alt="Angel Pandey's Logo"
          /></a>
          <ul id="nav-list">
            <li>
              <a class="navbar-item" href="index.php#about-me">About Me</a>
            </li>
            <li><a class="navbar-item" href="projects.php">Projects</a></li>
            <li><a class="navbar-item" href="Contact.php">Contact</a></li>
            <li><a class="navbar-item" href="privacy.php">Privacy</a></li>
          </ul>
          <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
          </button>
        </nav>
      </div>
    </section>
