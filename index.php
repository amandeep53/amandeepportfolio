<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <link href="./style/style.css" rel="stylesheet">
  <title>Amandeep Portfolio</title>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortlink" href="https://amandeepportfolio.herokuapp.com/">
    <link rel="canonical" href="https://amandeepportfolio.herokuapp.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Web developer and designer,portfolio,Responsive,Freelancer">
    <meta name="Description" content="I am web developer and i am pursuing web design and development course in conestoga college.I have made ample number of projects in different languages like html,css,android,javascript.  ">
</head>
<body class="bg-size index-body-img">
  <div class="container">
    <header>
      <div class="hader-styl">
        <nav>
          <ul>
            <li>
              <a class="active" href="index.php">
                <b>HOME</b>
              </a>
            </li>
            <li>
              <a href="About-me.php">
                <b>ABOUT ME</b>
              </a>
            </li>
            <li>
              <a href="My Work.php">
                <b>My Work</b>
              </a>
            </li>
            <li>
              <a href="Contact-Me.php">
                <b>Contact Me</b>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
  <div class="container">
     <main>           
<h2 class="w3-center">Web Developer</h2>
<div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides" src="images/wordpress.jpg" alt="project in wordpress" style="width:100%">
  <img class="mySlides" src="images/game.png" alt="game project in javascript"style="width:100%">
  <img class="mySlides" src="images/penguin.png" alt="find penguin project in javascript" style="width:100%">
  <img class="mySlides" src="images/javagroup.png" alt="group project in javascript" style="width:100%">
  <img class="mySlides" src="images/perfectsandwich.jpg.png" alt="project in html and css "style="width:100%">   
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
      </main>
    <footer>
    <a href="https://www.facebook.com/aman.sarai.31"><i class="fa fa-facebook" style="font-size:28px; color: #fff"></i></a>
        <a href="https://twitter.com/Amandee73717819"> <i class="fa fa-twitter-square" style="font-size:28px; color: #fff"></i></a>
        <a href="https://www.instagram.com/amansarai17/?hl=en"> <i class="fa fa-instagram" style="font-size:28px; color: #fff"></i></a>
      <p class="copyright">Copyright &copy; 2019 Design By
       Amandeep kaur
      </p>
    </footer>
      </div>
</body>
</html>
