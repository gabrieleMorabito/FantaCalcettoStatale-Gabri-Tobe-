<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

.topnav {
    overflow: hidden;
    background-color: #333;
    width: 100%;
}
.subnav{
  overflow: hidden;
    background-color: lightblue;
    width: 100%;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

}

.subnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.subnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav-left, .topnav-right{
  float: left;
  display: inline;
}
.topnav-left{
  width: 75%;
}
.topnav-right{
  width: 25%;
}

.content {
    background-color: #ddd;
    padding: 10px;
    height: 200px; 
}

.footer {
    background-color: #f1f1f1;
    padding: 10px;
}
</style>
</head>
<body>

<div class="topnav">
  
  <div class="topnav-left">
    <a href="#">Home</a>
    <a href="#"></a>
  
  </div>
  <div class="topnav-right">
  <a href="#">LogIn</a> <!-- Profilo visto solo se loggato -->
  <a href="#">Le tue leghe</a> <!-- Si vede solo se sei loggato -->
  <a href="#">Info</a> 

  </div>
</div>

<div class="subnav">
  <a href="#">Home</a> <!-- riferito alla lega -->
  <a href="#">Squadre</a> <!-- Si vede solo se sei loggato -->
  <a href="#">Formazioni</a> <!-- Mostra per ogni squadre la formazione inserita della giornata corrente -->
  <a href="#">Classifiche</a> <!-- Mostra una versione piu' dettagliata della classifica -->
  <a href="#">Albo d'oro</a> <!-- Mostra i podi delle stagioni precenti -->
</div>

<div class="content">
  <h2>CSS Template</h2>
  <p>A topnav, content and a footer.</p>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>