<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "workers";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Take the values from the Form
$WorkerID=$_POST['WorkerID'];
$WorkerPassword=base64_encode($_POST['WorkerPassword']);

$sql = "SELECT * from worker
       where WorkerID='$WorkerID' and WorkerPassword='$WorkerPassword'";
$rw = mysqli_query($conn,$sql);
$total_rows=mysqli_num_rows($rw);

if ( $total_rows> 0) {
$_SESSION['WorkerID'] = $WorkerID;

} else {
    echo "Error: " . "ID/Password is incorrect";
header("location:unsuccessfullogin.php");

}

$conn->close();
?>



<html>
<head>
<title>Homepage</title>
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
<span style = "color:white;position:absolute;left:385px;top:17px;font-size:15px;">beautysalon.jamila@gmail.com</span>
<span style = "color:white;position:absolute;left:735px;top:9px;font-size:11px;">Almaty city,Pushkin street 41 </span>
<span style = "color:white;position:absolute;left:735px;top:31px;font-size:11px;">1-st floor,salon"JAMILA" </span>
<img src = "address.png" style = "position:absolute;left:700px" width = "40px" />
<span style = "color:white;position:absolute;right:310px;top:35px;font-size:21px;"><?php echo $_SESSION['WorkerID']; ?> </span>
<a href = "logout.php"><button href = "" style = "position:absolute;right:285px;background-color:#8B720E;color:white;font-size:20px;">Log out</button></a>
<input type = "text" placeholder = "Enter text...." style = "position:absolute;right:90px;top:13px;" size = "25" maxlength = "30" id = "search"/>
<button style = "position:absolute;right:5px;background-color:red;color:white;font-size:20px;" onclick = "MyFunction()" >Search</button>
<h1 style="font-family:arial;color:gold;font-size:30px;">JAMILA</h1>
<h2 style ="font-family:arial;color:gold;position:absolute;top:16px;right:510px;" >Salon of beauty<h2>
<p></p>
<ul>
  <li><a href="homepage.html" style="text-decoration:none;font-size:25px;background-color:black;color:white;">Homepage</a></li>
<li><a href="services.html" style="text-decoration:none;position:absolute;right:880px;">Our services</a></li>
  <li><a href="news.html" style="text-decoration:none;position:absolute;right:730px;">News</a></li>
  <li><a href="gallery.html" style="text-decoration:none;position:absolute;right:550px;">Gallery</a></li>
<li><a href="masters.html" style="text-decoration:none;position:absolute;right:300px;">Our masters</a></li>
<li><a href="feedbacks.html" style="text-decoration:none;position:absolute;right:50px;">Your feedbacks</a></li>
</ul>
<a href = "reservation.html"><button style = "background-color:black;color:white;height: 50px;margin:15px;font-family:sans serif;font-size:40px;position:absolute; right:330px;top:200px;" >Reserve our service  </button></a>
<p style = "text-align:left;color:#E58E0C;font-size:40px;position:absolute;top:240px;left:50px;">About the salon</p>
<img src = "salon1.jpg" width = "450px" style = "position:absolute;top:350px;left:40px;"/>  
 <p style = "text-align:left;color:#E58E0C;font-size:40px;position:absolute;top:680px;left:50px;">Our contacts</p> 
<img src = "2gis.jpg" width = "450px" style = "position:absolute;top:790px;left:40px;"/>   
<p style = "color:red;position:absolute;top:800px;left:550px;">Phone number:</p> 
<p style = "color:black;position:absolute;top:850px;left:550px;font-size:15px;">+77272735779</p>
<p style = "color:red;position:absolute;top:900px;left:550px;">Mobile phone numbers:</p> 
<p style = "color:black;position:absolute;top:950px;left:550px;font-size:15px;">77072240097 - Liliya</p>
<p style = "color:black;position:absolute;top:1000px;left:550px;font-size:15px;">+77056262828 - Aigul</p>
<p style = "color:red;position:absolute;top:1050px;left:550px;">Email:</p>
<p style = "color:black;position:absolute;top:1100px;left:550px;font-size:15px;">beautysalon.jamila@gmail.com</p>
<p style = "color:red;position:absolute;top:1150px;left:550px;">Address:</p>  
<p style = "color:black;position:absolute;top:1200px;left:550px;font-size:15px;">Almaty city,Pushkin street 41,1-st floor,salon"JAMILA"</p>
<p style = "color:black;position:absolute;top:340px;left:500px;font-size:15px;">Welcome to our salon of beauty called "JAMILA". We are glad to invite you to be serviced in the</p>
<p style = "color:black;position:absolute;top:370px;left:500px;font-size:15px;">salon. Our experienced masters and the pleasant ambiance will not spoil your expectations about us.</p>
<p style = "color:black;position:absolute;top:400px;left:500px;font-size:15px;">We provide services for any person of any age. If you need to cut your hair, clean your skin and just </p>
<p style = "color:black;position:absolute;top:430px;left:500px;font-size:15px;">change something in your appearance - come to our salon and you will not regret!</p>
<p style = "color:black;position:absolute;top:460px;left:500px;font-size:15px;">The salon exists more than 20 years. It was created in 1997 on the first floor of a residential house. Then,</p>
<p style = "color:black;position:absolute;top:490px;left:500px;font-size:15px;">the second floor was added. Now, the area of the salon is approximately 65.6 square meters. In the </p>
<p style = "color:black;position:absolute;top:520px;left:500px;font-size:15px;">salon, there are different types of services: haircut services, hairstyle services, hair coloring services, </p>
<p style = "color:black;position:absolute;top:550px;left:500px;font-size:15px;">hair highlighting services, hair curling services, men's beard trim services, manicure services, pedicure </p>
<p style = "color:black;position:absolute;top:580px;left:500px;font-size:15px;">services, cosmetology services, face cleaning services and body piercing services. There are services </p>
<p style = "color:black;position:absolute;top:610px;left:500px;font-size:15px;">for all ages. In the salon work 2 administrators, 2 manicure/pedicure masters, 3 hairstyle master and 1</p>
<p style = "color:black;position:absolute;top:640px;left:500px;font-size:15px;">cosmetologist.</p>
<p style = "text-align:left;color:#E58E0C;font-size:40px;position:absolute;top:650px;right:40px;">Our services</p>
<form>
<img src = "salon2.jpg" width = "170px"/>
<p style = "color:red;margin-top:10px;">Haircut</p>
<p style = "color:black;font-size:15px;">We provide our haircut</p>
<p style = "color:black;font-size:15px;">services for men, women, and</p>
<p style = "color:black;font-size:15px;">children.</p>
<a href = "services.html"/><p style = "color:blue;font-size:15px;">Read more....</p>
</form>
<p style = "text-align:left;color:#E58E0C;font-size:40px;position:absolute;top:320px;right:40px;">Latest news</p>
<img src = "https://cdn0.iconfinder.com/data/icons/large-weather-icons/512/Heat.png" width = "40px" style = "position:absolute;top:440px;right:210px;"/>
<a href = "news.html"/><p style = "font-size:17px;color:blue;position:absolute;top:1190px;right:70px;">A discount for manicure!</p>
<img src = "https://cdn0.iconfinder.com/data/icons/large-weather-icons/512/Heat.png" width = "40px" style = "position:absolute;top:1250px;right:260px;"/>
<a href = "news.html"/><p style = "font-size:17px;color:blue;position:absolute;top:1245px;right:80px;">New service was added!</p>
<img src = "https://cdn0.iconfinder.com/data/icons/large-weather-icons/512/Heat.png" width = "40px" style = "position:absolute;top:1305px;right:260px;"/>
<a href = "news.html"/><p style = "font-size:17px;color:blue;position:absolute;top:1300px;right:85px;">Discounts for children!</p>
<a href = "news.html"/><p style = "font-size:17px;color:blue;position:absolute;top:1340px;right:60px;">See more news...</p>
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