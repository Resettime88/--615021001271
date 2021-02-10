<!DOCTYPE html>
<html>
<head>
<title>MyWeb</title>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.mySlides {display:none;}
@font-face{font-family:DD;
           src:url(font/KRR_AengAei.ttf);}
body,h1 {font-family:DD;}
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</style>
</head>
<body>

<header>
<section>My website</section>
</header>

<nav>
<ul class="navbar">
<li><a class="active" href="#">หน้าแรก</a></li>
<li><a href="insert_form.php">เพิ่มข้อมูลภาพยนต์ที่ฉาย</a></li>
</ul>
</nav>
<br>
</body>
</html>