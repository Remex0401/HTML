<?php
$server = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "komentarze" ;

$conn = mysqli_connect($server, $username, $password, $dbname) ;

if(isset($_POST['submit'])){
	
	if(!empty($_POST['nick']) && !empty($_POST['komentarz'])){
		
		$nick = $_POST['nick'] ;
		$komentarz = $_POST['komentarz'] ;
		

		$query = "insert into koment(nick,komentarz) values('$nick' , '$komentarz' )" ;
		$run = mysqli_query($conn,$query) or die(mysqli_error());
if ($run){
		echo '<script type="text/javascript">';
		echo ' alert("Komentarz dodany")';
		echo '</script>';
}
else {
	echo '<script type="text/javascript">';
		echo ' alert("Niestety komentarz nie zostały dodany")';
		echo '</script>'; ;
}
}
else {
echo "Wszystkie pola wymagane" ;
}
}
	
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title> Szybkie autka </title>
<meta name="description" content="Najlepsza strona jaką stworzył Remigiusz Szmyt">
<link rel="stylesheet" href="main.css">
<script>
var tImg = ['icon-off.png','icon-on.png'];
        
var vImg = true;
function fSetImg(){
    if (vImg){
        document.getElementById('iImg').src = tImg[1];
        vImg = false;
    }
    
    else {
        document.getElementById('iImg').src = tImg[0];
        vImg = true;
    }
}
var gImg = ['icon-off.png','icon-on.png'];
        
function over(id, img) 
        {            
            document.getElementById(id).src = img;            
        }

        function clicked(id, img)
        {            
            document.getElementById('set').src = img;
            over(id,img);
        }

        function out(id, img)
        {
            document.getElementById(id).src = img;
        }
        </script>
</head>

<body>

<div class="logo"> 
<center> <img id="logo" src="foto/logo.png" alt="logo"> </center> 
</div>


<div class="nav">
<div>
      <button type="button" class="btn btn--4"><span class="btn__text"><a href="index.html" id="b1"> Strona główna </a> </span></button>
</div>
<br>
<div>
      <button type="button" class="btn btn--4"><span class="btn__text"> <a href="galeria.html" id="b1"> Galeria zdjęć różnych autek </a> </span></button>
</div>
<br>
<div>
      <button type="button" class="btn btn--4"><span class="btn__text"> <a href="celebryci.html" id="b1"> Jakimi furami wożą się celerbyrci </a> </span></button>
</div>
<h4> 


 </div>
</h4>

<div class="content">
<center>
<img id="set" src="foto/passat.png" alt="glowezdj">
</center>
<h3> Powiększ sobie zdjęcie </h3>
<center>
<img id="autkom" src="foto/passat.png" alt="passat1" onclick="clicked('1', 'foto/passat.png')" id="1"/>
<img id="autkom" src="foto/passat2.png" alt="passat2" onclick="clicked('2', 'foto/passat2.png')" id="2" />
<img id="autkom" src="foto/passat3.png" alt="passat2" onclick="clicked('3', 'foto/passat3.png')" id="3" />
<img id="autkom" src="foto/passat4.png" alt="passat4" onclick="clicked('4', 'foto/passat4.png')" id="4"/>
<img id="autkom" src="foto/passat5.png" alt="passat5" onclick="clicked('5', 'foto/passat5.png')" id="5" />
<img id="autkom" src="foto/passat6.png" alt="passat6" onclick="clicked('6', 'foto/passat6.png')" id="6" />

</center>
<br><br>
<form action ="dbcon.php" method="post">
<label> Nick:</label><input type ="text" name="nick"> <br><br>
<label> Komentarz:</label><input type ="text" name="komentarz" placeholder="maksymalnie 100 znaków"> <br>
<button type="submit" name="submit"> Wyślij </button>
</form>

<br><br>
<?php
$servername='localhost';
    $username='root';
    $password='';
    $dbname = "komentarze";


$conn=mysqli_connect($servername,$username,$password,"$dbname");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nick, komentarz  FROM koment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "Nick: <b>" . $row["nick"]. "</b> <br> Komentarz: <b>" . $row["komentarz"]. "</b><br>";
  }
} else {
  echo "Brak komentarzy";
}
$conn->close();
?>
<br><br><br><br>
</div>

<div class="tab"> <center>
<table> <p> <b> Najmocniejsze samochody <b>
<tr> 
<th> &nbspProducent <th> Model <th> &nbspMoc w koniach <br> &nbspmechanicznych
</tr> <tr> 
<td> <span > &nbspMercedes </td> <td><span> &nbspS65 AMG </td> <td><span> &nbsp630 </td> </span>
</tr> <tr> 
<td> <span > &nbspBMW <td> <span>&nbspM5 CS <td> <span> &nbsp635 </span>
</tr> <tr> 
<td> &nbspAudi <td> &nbspR8 <td> &nbsp610
</tr> <tr> 
<td> &nbspFerrari <td> &nbspDaytona SP3&nbsp <td> &nbsp840
</tr>
</table>
</center>
<br>
<img id="zdjglowna" src="foto/szybkieauta.jpg">
<h6>
 <b> Chcesz zostać naszmy redaktorem? <br> Łap tutaj  <i> <a href="register.html" id="link" > formularz kontaktowy </a> </i> ← kliknij  </p>
</h6>
 </div>
</b>


<!--
<div class="footer"> <center>

<br><br><br><br><br><br><footer>  © Remigiusz Szmyt </a> </footer>
</blockquote>
 </div>

-->

</body>
</html>
