<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>

    <style type='text/css'>

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

@font-face {
  font-family: 'planet_kosmosregular';
  src: url('plank___-webfont.woff2') format('woff2'),
       url('plank___-webfont.woff') format('woff');
  font-weight: normal;
  font-style: normal;

}
body{
  background: rgb(233, 233, 233);
}
.container{
  display: flex;
  width: 1200px;
  margin: auto;
}
nav{
  position: absolute;
  top: 0;
  left: -20px;
  bottom: 0;
  width: 280px;
  height: 100vh;
  background: #fff;
}
.navbar{
  width: 80%;
  margin: 0 auto;
}

.logo{
  margin: 2rem 0 1rem 0;
  padding-bottom: 3rem;
  display: flex;
  align-items: center;
}
.logo img{
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.logo h1{
  font-size: 40px;
  margin: 10px 0 30px;
  line-height: 80px;
  color: darkred;
  font-family: 'planet_kosmosregular', Arial, sans-serif;
  margin-left: 1rem;
}

ul{
  margin: 0 auto;
}
li{
  padding-bottom: 2rem;
}
li a{
  font-size: 16px;
  color: rgb(85, 83, 83);
}

nav i{
  width: 50px;
  font-size: 18px;
  text-align: center;
}

.logout{
  position: absolute;
  bottom: 20px;
}

.back-video{
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: -1;
}

.hero{
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(12, 3, 51, 0.3),rgba(12, 3, 51, 0.3));
  position: relative;
  padding: 0 5%;
  display: flex;
  align-items: center;
  justify-content: center;
}
    </style>

    <div class="hero">

    <video autoplay loop muted plays-inline class="back-video">
      <source src="media/balls.mp4" type="video/mp4">
    </video>

    <section id="dash">
      <div class="display">
        <div class='greeting'>Hello <?php echo $user_data['user_name']; ?></div>
      </div>
    </section>


  </div>

  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <h1>drive</h1>
        </div>
        <ul>
          <li><a href="index.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>
          <li><a href="beginner.html">
            <i class="fas fa-basketball-ball"></i>
            <span class="nav-item">Beginner</span>
          </a>
          </li>
          <li><a href="download.html">
            <i class="fas fa-download"></i>
            <span class="nav-item"> Download</span>
          </a>
        </li>
          <li><a href="logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>

  </div>


</body>
</html>