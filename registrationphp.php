<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workers";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['submit'])){


$WorkerID=$_POST['WorkerID'];
$WorkerName=$_POST['WorkerName'];
$WorkerEmail=$_POST['WorkerEmail'];
$WorkerPhoneNumber=$_POST['WorkerPhoneNumber'];
$WorkerPassword=$_POST['WorkerPassword'];
$WorkerConfirmPassword=$_POST['WorkerConfirmPassword'];
$WorkerOccupation=$_POST['WorkerOccupation'];


$sqli = "SELECT * from workerid
       where WorkerID='$WorkerID'";
$rw = mysqli_query($conn,$sqli);
$total_rows=mysqli_num_rows($rw);

if($total_rows> 0){
$_SESSION['WorkerName'] = $WorkerName;
$WorkerPassword = base64_encode($WorkerPassword);
$WorkerConfirmPassword = base64_encode($WorkerConfirmPassword);
$sql = "INSERT INTO worker (WorkerID, WorkerName,WorkerEmail,WorkerPhoneNumber,WorkerPassword,WorkerConfirmPassword,WorkerOccupation)
VALUES ('$WorkerID', '$WorkerName','$WorkerEmail','$WorkerPhoneNumber','$WorkerPassword','$WorkerConfirmPassword','$WorkerOccupation')";
$run = mysqli_query($conn,$sql);
}
else {
header("location:unsuccessfulregistration.php");

}

}
?>




<html>
<head>
<title>Welcome!</title>
<style>
body {
 background-image: url("purple.jpg"),url("pink.png");
background-position: center top,center center;
  background-attachment:scroll;
  background-repeat: no-repeat;
 background-size: 1500px 280px,1500px 4000px;
  text-align: center;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 20px;
  overflow: hidden;
  background-color: white;

}

li {
  float: left;
}

li a {
  display: block;
  padding: 8px;
  color:black;
}
form{
border: 1px solid Red; 
position:absolute; 
top:750px;
right:50px}
a{
text-decoration: underline;}
</style>
</head>
<body>
<img src = "instagram.png" align = "left" width = "40px"/>
<strong><span style = "color:white;position:absolute;left:55px;top:17px;font-size:20px;">@salon.jamila</span></strong>
<img src = "phone.png" style = "position:absolute;left:190px" width = "40px" />
<span style = "position:absolute;left:230px;color:white;top:5px;">+77272735779</span>
<span style = "position:absolute;left:230px;color:white;top:25px;">+77072240097</span>
<span style = "position:absolute;left:230px;color:white;top:45px;">+77056262828</span>
<img src = "mail.png" style = "position:absolute;left:340px" width = "40px" />
<span style = "color:white;position:absolute;left:385px;top:22px;font-size:15px;">beautysalon.jamila@gmail.com</span>
<img src = "address.png" style = "position:absolute;left:700px" width = "40px" />
<span style = "color:white;position:absolute;left:735px;top:23px;font-size:11px;">Almaty city,Pushkin street 41 </span>
<span style = "color:white;position:absolute;left:735px;top:45px;font-size:11px;">1-st floor,salon"JAMILA" </span>
<a href = "login.html"><button href = "" style = "position:absolute;right:305px;background-color:#8B720E;color:white;font-size:20px;">Log in</button></a>
<input type = "text" placeholder = "Enter text...." style = "position:absolute;right:90px;top:13px;" size = "25" maxlength = "30" id = "search"/>
<button style = "position:absolute;right:5px;background-color:red;color:white;font-size:20px;" onclick = "MyFunction()" >Search</button>
<h1 style="font-family:arial;color:gold;font-size:30px;">JAMILA</h1>
<h2 style ="font-family:arial;color:gold;position:absolute;top:20px;right:510px;" >Salon of beauty<h2>
<p></p>
<ul>
  <li><a href="homepage.html" style="text-decoration:none;font-size:25px;">Homepage</a></li>
  <li><a href="services.html" style="text-decoration:none;position:absolute;right:880px;">Our services</a></li>
  <li><a href="news.html" style="text-decoration:none;position:absolute;right:730px;">News</a></li>
  <li><a href="gallery.html" style="text-decoration:none;position:absolute;right:550px;">Gallery</a></li>
<li><a href="masters.html" style="text-decoration:none;position:absolute;right:300px;">Our masters</a></li>
<li><a href="feedbacks.html" style="text-decoration:none;position:absolute;right:50px;">Your feedbacks</a></li>
</ul>
<a href = "reservation.html"><button style = "background-color:black;color:white;height: 50px;margin:15px;font-family:sans serif;font-size:40px;position:absolute; right:330px;top:200px;" >Reserve our service  </button></a>
<div class = "header"></div>
<p style = "text-align:left;color:#E58E0C;font-size:40px;position:absolute;top:240px;left:50px;">Welcome <?php echo $_SESSION['WorkerName']; ?></p>
</body>
</html>
<script>
function MyFunction(){
var x = document.getElementById("search").value;
if (x =="natalya mustafaeva"){
window.location.href = "masters.html";
}
else if (x =="Natalya Mustafaeva"){
window.location.href = "masters.html";
}
else if (x =="natalya"){
window.location.href = "masters.html";
}
else if (x =="Natalya"){
window.location.href = "masters.html";
}
else if (x =="mustafaeva"){
window.location.href = "masters.html";
}
else if (x =="Mustafaeva"){
window.location.href = "masters.html";
}
else if (x =="svetlana zemerova"){
window.location.href = "masters.html";
}
else if (x =="Svetlana Zemerova"){
window.location.href = "masters.html";
}
else if (x =="svetlana"){
window.location.href = "masters.html";
}
else if (x =="Svetlana"){
window.location.href = "masters.html";
}
else if (x =="zemerova"){
window.location.href = "masters.html";
}
else if (x =="Zemerova"){
window.location.href = "masters.html";
}
else if (x =="tatyana udachina"){
window.location.href = "masters.html";
}
else if (x =="Tatyana Udachina"){
window.location.href = "masters.html";
}
else if (x =="tatyana"){
window.location.href = "masters.html";
}
else if (x =="Tatyana"){
window.location.href = "masters.html";
}
else if (x =="udachina"){
window.location.href = "masters.html";
}
else if (x =="Udachina"){
window.location.href = "masters.html";
}
else if (x =="nailya zaripova"){
window.location.href = "masters.html";
}
else if (x =="Nailya Zaripova"){
window.location.href = "masters.html";
}
else if (x =="nailya"){
window.location.href = "masters.html";
}
else if (x =="Nailya"){
window.location.href = "masters.html";
}
else if (x =="zaripova"){
window.location.href = "masters.html";
}
else if (x =="Zaripova"){
window.location.href = "masters.html";
}
else if (x =="sanam razyamova"){
window.location.href = "masters.html";
}
else if (x =="Sanam Razyamova"){
window.location.href = "masters.html";
}
else if (x =="sanam"){
window.location.href = "masters.html";
}
else if (x =="Sanam"){
window.location.href = "masters.html";
}
else if (x =="razyamova"){
window.location.href = "masters.html";
}
else if (x =="Razyamova"){
window.location.href = "masters.html";
}
else if (x =="yuliya bekker"){
window.location.href = "masters.html";
}
else if (x =="Yuliya Bekker"){
window.location.href = "masters.html";
}
else if (x =="yuliya"){
window.location.href = "masters.html";
}
else if (x =="Yuliya"){
window.location.href = "masters.html";
}
else if (x =="bekker"){
window.location.href = "masters.html";
}
else if (x =="Bekker"){
window.location.href = "masters.html";
}
else if (x =="nadezhda evdokimova"){
window.location.href = "masters.html";
}
else if (x =="Nadezhda Evdokimova"){
window.location.href = "masters.html";
}
else if (x =="nadezhda"){
window.location.href = "masters.html";
}
else if (x =="Nadezhda"){
window.location.href = "masters.html";
}
else if (x =="evdokimova"){
window.location.href = "masters.html";
}
else if (x =="Evdokimova"){
window.location.href = "masters.html";
}
else if (x =="larisa prokopyeva"){
window.location.href = "masters.html";
}
else if (x =="Larisa Prokopyeva"){
window.location.href = "masters.html";
}
else if (x =="larisa"){
window.location.href = "masters.html";
}
else if (x =="Larisa"){
window.location.href = "masters.html";
}
else if (x =="prokopyeva"){
window.location.href = "masters.html";
}
else if (x =="Prokopyeva"){
window.location.href = "masters.html";
}
else if (x =="female haircut"){
window.location.href = "services.html";
}
else if (x =="Female haircut"){
window.location.href = "services.html";
}
else if (x =="male haircut"){
window.location.href = "services.html";
}
else if (x =="Male haircut"){
window.location.href = "services.html";
}
else if (x =="children's haircut"){
window.location.href = "services.html";
}
else if (x =="Children's haircut"){
window.location.href = "services.html";
}
else if (x =="manicure"){
window.location.href = "services.html";
}
else if (x =="Manicure"){
window.location.href = "services.html";
}
else if (x =="pedicure"){
window.location.href = "services.html";
}
else if (x =="Pedicure"){
window.location.href = "services.html";
}
else if (x =="hair coloring"){
window.location.href = "services.html";
}
else if (x =="Hair coloring"){
window.location.href = "services.html";
}
else if (x =="hair highlighting"){
window.location.href = "services.html";
}
else if (x =="Hair highlighting"){
window.location.href = "services.html";
}
else if (x =="hair curling"){
window.location.href = "services.html";
}
else if (x =="Hair curling"){
window.location.href = "services.html";
}
else if (x =="men's beard trim"){
window.location.href = "services.html";
}
else if (x =="Men's beard trim"){
window.location.href = "services.html";
}
else if (x =="cosmetology"){
window.location.href = "services.html";
}
else if (x =="Cosmetology"){
window.location.href = "services.html";
}
else if (x =="face cleaning"){
window.location.href = "services.html";
}
else if (x =="Face cleaning"){
window.location.href = "services.html";
}
else if (x =="body piercing"){
window.location.href = "services.html";
}
else if (x =="Body piercing"){
window.location.href = "services.html";
}
else if (x =="contacts"){
window.location.href = "homepage.html";
}
else if (x =="Contacts"){
window.location.href = "homepage.html";
}
else if (x =="home"){
window.location.href = "homepage.html";
}
else if (x =="Home"){
window.location.href = "homepage.html";
}
else if (x =="homepage"){
window.location.href = "homepage.html";
}
else if (x =="Homepage"){
window.location.href = "homepage.html";
}
else if (x =="feedbacks"){
window.location.href = "feedbacks.html";
}
else if (x =="Feedbacks"){
window.location.href = "feedbacks.html";
}
else if (x =="gallery"){
window.location.href = "gallery.html";
}
else if (x =="Gallery"){
window.location.href = "gallery.html";
}
else if (x =="photos"){
window.location.href = "gallery.html";
}
else if (x =="Photos"){
window.location.href = "gallery.html";
}
else if (x =="masters"){
window.location.href = "masters.html";
}
else if (x =="Masters"){
window.location.href = "masters.html";
}
else if (x =="workers"){
window.location.href = "masters.html";
}
else if (x =="Workers"){
window.location.href = "masters.html";
}
else if (x =="news"){
window.location.href = "news.html";
}
else if (x =="News"){
window.location.href = "news.html";
}
else if (x =="reservation"){
window.location.href = "reservation.html";
}
else if (x =="Reservation"){
window.location.href = "reservation.html";
}
else if (x =="reserve"){
window.location.href = "reservation.html";
}
else if (x =="Reserve"){
window.location.href = "reservation.html";
}
else if (x =="services"){
window.location.href = "services.html";
}
else if (x =="Services"){
window.location.href = "services.html";
}
else if (x =="service"){
window.location.href = "services.html";
}
else if (x =="Service"){
window.location.href = "services.html";
}
else {
window.location.href = "nothingwasfound.html";
}
}
 
</script>

